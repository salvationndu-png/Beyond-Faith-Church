<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Http;
use App\Models\Payments;
use App\Models\Events;
use App\Models\Ebooks;
use App\Models\Contacts;
use App\Models\Messages;
use App\Models\GalleryItem;
use Illuminate\Http\Request;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;

// use Illuminate\Support\Facades\Http;  

class HomeController extends Controller
{
    
    
    public function redirect(Request $request)
    {
      if(Auth::id())
      {
          if (Auth::user()->usertype=='0')
           {
              return view('user.user_dashboard');
          }
          else {
              $totalEvents = Events::count();
              $totalEbooks = Ebooks::count();
              $totalMessages = Messages::count();
              $totalContacts = Contacts::count();
              $totalGalleries = GalleryItem::distinct('header')->count('header');
              
              $recentEvents = Events::latest()->take(5)->get();
              $recentMessages = Messages::latest()->take(5)->get();
              
              $query = Contacts::query();
              
              if ($request->search) {
                  $query->where(function($q) use ($request) {
                      $q->where('name', 'like', '%'.$request->search.'%')
                        ->orWhere('email', 'like', '%'.$request->search.'%')
                        ->orWhere('message', 'like', '%'.$request->search.'%');
                  });
              }
              
              $sortBy = $request->get('sort', 'created_at');
              $sortOrder = $request->get('order', 'desc');
              $query->orderBy($sortBy, $sortOrder);
              
              $recentContacts = $query->paginate(10)->withQueryString();
              
              return view('admin.home', compact(
                  'totalEvents', 'totalEbooks', 'totalMessages', 'totalContacts', 'totalGalleries',
                  'recentEvents', 'recentMessages', 'recentContacts'
              ));
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
    
    
    
    
    
    public function index(Request $request)
    {
      $events= Events::all();
      
      $messagesQuery = Messages::query();
      if ($request->has('search_sermons')) {
          $messagesQuery->where('header', 'like', '%' . $request->search_sermons . '%');
      }
      $messages = $messagesQuery->paginate(6)->appends(['search_sermons' => $request->search_sermons]);
      
      $ebooksQuery = Ebooks::query();
      if ($request->has('search_ebooks')) {
          $ebooksQuery->where('header', 'like', '%' . $request->search_ebooks . '%');
      }
      $ebooks = $ebooksQuery->paginate(6)->appends(['search_ebooks' => $request->search_ebooks]);
      
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
