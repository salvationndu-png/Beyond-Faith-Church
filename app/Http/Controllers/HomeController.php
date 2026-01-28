<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Http;
use App\Models\Payments;
use App\Models\Events;
use App\Models\Ebooks;
use App\Models\Messages;
use App\Models\GalleryItem;
use Illuminate\Http\Request;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;

// use Illuminate\Support\Facades\Http;  

class HomeController extends Controller
{
    
    
    public function redirect()
    {
      if(Auth::id())
      {
          if (Auth::user()->usertype=='0')
           {
            // $course= Courses::latest()->take(3)->get();
            // $data= Announcements::latest()->get();
            // $events= Events::latest()->take(3)->get();
              return view('user.user_dashboard');
          }
          else {
            // $user=User::all(); 
              return view('admin.home');
          }
      }
      else {
         return redirect()->back();
      }
      }
   
    
    
    
    
        public function eventid($id)
        {
          $data= Events::find($id);
          // $products = products::with('types')->get();
          return view('user.events-id',compact('data'));
          }  
    
    
    
    
    
    public function index()
    {
      $events= Events::all();
      $messages= Messages::all();
      $ebooks= Ebooks::all();
      $gallery= GalleryItem::all();
     return view('user.home', compact('events','gallery','messages','ebooks'));
    }
    public function donatepage()
    {
 
     return view('user.donatepage');
    }
    public function paypage()
    {
 
     return view('user.paypage');
    }
    public function about()
    {
 
     return view('user.about');
    }
    public function contact()
    {
 
     return view('user.contact');
    }
    public function gallery()
    {
 
     return view('user.gallery');
    }
    public function photogallery()
    {
 
     return view('user.photogallery');
    }
    public function messege()
    {
       $data= Messages::all();

     return view('user.ebooks_user',compact('data'));
    }
    public function ebooks_user()
    {
       $data= Ebooks::all();

     return view('user.ebooks_user',compact('data'));
    }


public function payCallback(Request $request, Ebooks $ebook)
{
    if (!$request->reference) {
        abort(403, 'Payment reference missing');
    }

    $response = Http::withToken(config('services.paystack.secret_key'))
        ->get('https://api.paystack.co/transaction/verify/' . $request->reference);

    if (!$response->successful()) {
        abort(500, 'Unable to verify payment');
    }

    if ($response['data']['status'] !== 'success') {
        abort(403, 'Payment not successful');
    }

    if (!$ebook->pdf) {
        abort(500, 'PDF filename not found in database');
    }

    $filePath = public_path('ebooks/' . $ebook->pdf);

    if (!file_exists($filePath)) {
        abort(404, 'PDF file not found');
    }

    return response()->download($filePath, $ebook->header . '.pdf');
}








}
