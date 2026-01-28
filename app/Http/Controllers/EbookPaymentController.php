<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Ebooks;
use App\Models\Payments;

class EbookPaymentController extends Controller
{
    /**
     * Show Paystack payment page
     */


    /**
     * Paystack callback (verification happens here)
     */



public function pay(Ebooks $ebook)
    {
        return view('ebooks.pay', compact('ebook'));
    }

    public function callback(Request $request, Ebooks $ebook)
    {
        $reference = $request->query('reference');

        if (!$reference) {
            abort(403, 'Payment reference missing');
        }

        $response = Http::withToken(config('paystack.secretKey'))
            ->get("https://api.paystack.co/transaction/verify/{$reference}");

        if (
            !$response->successful() ||
            ($response['data']['status'] ?? null) !== 'success'
        ) {
            return redirect()
                ->route('ebooks.show', $ebook->id)
                ->with('error', 'Payment verification failed');
        }

        Payments::updateOrCreate(
            ['ref_id' => $reference],
            [
                'ebook_id' => $ebook->id,
                'email'    => auth()->user()->email ?? 'guest@example.com',
                'amount'   => $ebook->price,
                'status'   => 'paid', // set status here after successful payment
                'trans_id' => $response['data']['id'],
            ]
        );



        return redirect()
            ->route('ebooks.show', $ebook->id)
            ->with('success', 'Payment successful. You can download your ebook.');
    }

    public function download(Ebooks $ebook)
    {
        $paid = Payments::where('ebook_id', $ebook->id)
            ->where('email', auth()->user()->email ?? 'guest@example.com')
            ->where('status', 'paid')
            ->exists();

        if (!$paid) {
            abort(403);
        }

        return response()->download(public_path($ebook->pdf));
    }




     public function handle(Request $request)
    {
        $signature = $request->header('x-paystack-signature');

        $expected = hash_hmac(
            'sha512',
            $request->getContent(),
            config('paystack.secretKey')
        );

        if ($signature !== $expected) {
            abort(403);
        }

        if ($request->input('event') === 'charge.success') {
            $data = $request->input('data');

            Payments::updateOrCreate(
                ['ref_id' => $data['reference']],
                [
                    'ebook_id' => $data['metadata']['ebook_id'] ?? null,
                    'email'    => $data['customer']['email'],
                    'amount'   => $data['amount'] / 100,
                    'status'   => 'paid',
                    'trans_id' => $data['id'],
                ]
            );
        }

        return response()->json(['status' => 'ok']);
    }
}

