<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
use App\Models\Ebooks;
use App\Models\Payments;

class EbookPaymentController extends Controller
{
    public function pay($encrypted)
    {
        try {
            $id = decrypt($encrypted);
            $ebook = Ebooks::findOrFail($id);
            return view('ebooks.pay', compact('ebook', 'encrypted'));
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function callback(Request $request, $encrypted)
    {
        try {
            $id = decrypt($encrypted);
            $ebook = Ebooks::findOrFail($id);
        } catch (\Exception $e) {
            abort(404);
        }

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
                ->route('ebooks.show', $encrypted)
                ->with('error', 'Payment verification failed');
        }

        Payments::updateOrCreate(
            ['ref_id' => $reference],
            [
                'ebook_id' => $ebook->id,
                'email'    => auth()->user()->email ?? 'guest@example.com',
                'amount'   => $ebook->price,
                'status'   => 'paid',
                'trans_id' => $response['data']['id'],
            ]
        );

        return redirect()
            ->route('ebooks.show', $encrypted)
            ->with('download', true);
    }

    public function download($encrypted)
    {
        try {
            $id = decrypt($encrypted);
            $ebook = Ebooks::findOrFail($id);
        } catch (\Exception $e) {
            abort(404);
        }

        $paid = Payments::where('ebook_id', $ebook->id)
            ->where('email', auth()->user()->email ?? 'guest@example.com')
            ->where('status', 'paid')
            ->exists();

        if (!$paid) {
            abort(403, 'Payment required to download this ebook');
        }

        $filePath = public_path('ebooks/' . $ebook->pdf);
        
        if (!file_exists($filePath)) {
            abort(404, 'Ebook file not found');
        }

        return response()->download($filePath, $ebook->header . '.pdf');
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

