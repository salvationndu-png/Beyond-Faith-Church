<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Gallery;
use App\Models\GalleryItem;
use App\Models\Messages;
use App\Models\Ebooks;
use App\Models\Contacts;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Smalot\PdfParser\Parser;

use Illuminate\Support\Facades\File;


use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    //

    public function events_upload(Request $request)
    {
      $data= new Events;
      $data->header= $request->header;
      $data->date= $request->date;
      $data->time= $request->time;
      $data->location= $request->location;
      $data->writeup= $request->writeup;

      $image=$request->image;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('images',$imagename);
      $data->image= $imagename;
      $data->save();


    return redirect()->back()->with('message','New Event Added !');
    }



public function ebookupload(Request $request)
{
    // ✅ Validate
    $request->validate([
        'header'  => 'required|string|max:255',
        'message' => 'required|string',
        'price'   => 'required|numeric',
        'images'  => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        'pdf'     => 'required|file|mimes:pdf|max:51200', // 50MB max
    ]);

    /* -------------------------
       Store Cover Image
    --------------------------*/
    $imageName = time().'_cover.'.$request->images->getClientOriginalExtension();
    $request->images->move(public_path('ebook_images'), $imageName);

    /* -------------------------
       Store Ebook File
    --------------------------*/
    $file = $request->file('pdf');
    $fileName = time().'_ebook.'.$file->getClientOriginalExtension();
    $file->move(public_path('ebooks'), $fileName);

    /* -------------------------
       Save to Database
    --------------------------*/
    Ebooks::create([
        'header'  => $request->header,
        'message' => $request->message,
        'price'   => $request->price,
        'images'  => 'ebook_images/'.$imageName,
        'pdf'     => $fileName, // only store file name
    ]);

    return redirect()->back()->with('success', 'Ebook uploaded successfully!');
}

    public function contact_upload(Request $request)
    {
      $data= new Contacts;
      $data->name= $request->name;
      $data->email= $request->email;
      $data->message= $request->message;
      $data->save();

      return redirect()->back()->with('success', 'Your message has been sent successfully!');

    }


    public function events_id_upload(Request $request, $id)
    {
      $data= Events::find($id);

      $data->header= $request->header;
      $data->date= $request->date;
      $data->time= $request->time;
      $data->location= $request->location;
      $data->writeup= $request->writeup;

      $image=$request->image;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('images',$imagename);
      $data->image= $imagename;
      $data->save();


    return redirect()->back()->with('message','Update Successful !');
    }

    public function message_id_upload(Request $request, $id)
    { 

    // Update text fields
    $data->header  = $request->header;
    $data->message = $request->message;

    // Only update image if a new file was uploaded
    if ($request->hasFile('images')) {
        $image = $request->file('images');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imagename);

        // Delete old image if exists
        if ($data->images && file_exists(public_path($data->images))) {
            @unlink(public_path($data->images));
        }

        $data->images = 'images/' . $imagename;
    }

    $data->save();

    return redirect()->back()->with('success', 'Update Successful!');
}
public function ebooks_id_upload(Request $request, $id)
{
    $data = Ebooks::find($id);

    // Update text fields
    $data->header  = $request->header;
    $data->message = $request->message;

    // Only update image if a new file was uploaded
    if ($request->hasFile('images')) {
        $image = $request->file('images');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imagename);

        // Delete old image if exists
        if ($data->images && file_exists(public_path($data->images))) {
            @unlink(public_path($data->images));
        }

        $data->images = 'images/' . $imagename;
    }

    $data->save();

    return redirect()->back()->with('success', 'Update Successful!');
}



    public function gallery_id_upload(Request $request, $id)
    {
      $data= GalleryItem::find($id);

      $data->header= $request->header;
      $data->subject= $request->subject;
      $data->save();


    return redirect()->back()->with('message','Update Successful !');
    }

    public function events()
    {
      $data= Events::all();

     return view('admin.events',compact('data'));
    }
    public function messages()
    {
      $data= Messages::all();
     return view('admin.messages',compact('data'));
    }

    public function admingallery()
    {
      // $data= Gallery::all();
         $data = GalleryItem::orderBy('created_at', 'desc')->get()->groupBy('header');
     
     return view('admin.admingallery',compact('data'));
    }
    public function ebooks()
    {
      $data= Ebooks::all();

     return view('admin.ebooks',compact('data'));
    }
    public function ebooksource()
    {
      $data= Ebooks::all();

     return view('admin.ebooksource',compact('data'));
    }
    public function contacts()
    {
      // $data= Ebooks::all();

     return view('admin.contacts');
    }
         public function delete_event($id)
        {
           $data= Events::findOrFail($id);
           $data->delete();
           return redirect()->back()->with('message','Event Deleted !');
        }
         public function ebook_delete($id)
        {
           $data= Ebooks::findOrFail($id);
           $data->delete();
           return redirect()->back()->with('success','Event Deleted !');
        }
         public function gallery_delete($id)
        {  
           $data= GalleryItem::findOrFail($id);
           $data->delete();
           return redirect()->back()->with('success','Gallery Item Deleted !');
        }
        public function delete_message($id)
        {
           $data= Messages::findOrFail($id);
           $data->delete();
           return redirect()->back()->with('success','Message Deleted !');
        }
        public function delete_ebook($id)
        {
           $data= Ebooks::findOrFail($id);
           $data->delete();
           return redirect()->back()->with('message','Message Deleted !');
        }

        public function event_id($id)
        {
          $data= Events::find($id);
          // $products = products::with('types')->get();
          return view('admin.aevents_id',compact('data'));
          }  




public function getEbook($id)
{
    $ebook = Ebooks::findOrFail($id); // Get the ebook from DB

    // Build full path to PDF file
    $pdfPath = public_path('ebooks/' . $ebook->pdf); // assuming $ebook->pdf stores filename


    $reference = 'ebook_' . uniqid();

    return view('user.e-books', compact('ebook',  'reference'));
}
 
        public function audio_id($id)
        {
          $data= Messages::find($id);
          return view('user.audio',compact('data'));
          }  

        public function message_id($id)
        {
          $data= Messages::find($id);
          // $products = products::with('types')->get();
          return view('admin.messages-id',compact('data'));
          }  







public function uploadGallery(Request $request)
{
    // Validate
    $request->validate([
        'header' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'images' => 'required|array',
        'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:20048',
    ]);

    $imagePaths = [];

    foreach ($request->file('images') as $image) {
        // Generate a unique filename
        $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();

        // Move the image to public/galleries
        $image->move(public_path('galleries'), $filename);

        // Save the relative path
        $imagePaths[] = 'galleries/' . $filename;
    }

    // Save to database
    GalleryItem::create([
        'header'  => $request->header,
        'subject' => $request->subject,
        'images'  => $imagePaths,
    ]);

    return back()->with('success', 'Gallery uploaded successfully');
}


        public function gallery_id($id)
        {
          $data= GalleryItem::find($id);
          // $products = products::with('types')->get();
          return view('admin.gallery-edit',compact('data'));
          }  
        public function ebook_edit($id)
        {
          $data= Ebooks::find($id);
          // $products = products::with('types')->get();
          return view('admin.ebook-edit',compact('data'));
          }  
// public function gallery_upload(Request $request)
// {
  
//       $data= new GalleryItems;
//       $data->header= $request->header;
          

//       $data->save();
    

//     return back()->with('message', 'Images uploaded.');
// }



public function messageupload(Request $request)
{
    // -------------------------------
    // 1️⃣ Laravel basic validation
    // -------------------------------
    $request->validate([
        'header'  => 'required|string|max:255',
        'audio'   => 'required|file',    // manual checks for type & size
        'images'  => 'required|image',   // manual checks for type & size
        'message' => 'required|string',
    ]);

    // -------------------------------
    // 2️⃣ Audio validation
    // -------------------------------
    $audio = $request->file('audio');
    $allowedAudio = ['mp3', 'wav', 'ogg'];
    $maxAudioMB = 50;

    $audioExt = strtolower($audio->getClientOriginalExtension());

    if (!in_array($audioExt, $allowedAudio)) {
        return back()
            ->withErrors(['audio' => 'Invalid audio format. Allowed: mp3, wav, ogg'])
            ->withInput();
    }

    if ($audio->getSize() > ($maxAudioMB * 1024 * 1024)) {
        return back()
            ->withErrors(['audio' => "Audio must not exceed {$maxAudioMB} MB"])
            ->withInput();
    }

    // -------------------------------
    // 3️⃣ Image validation
    // -------------------------------
    $image = $request->file('images');
    $allowedImages = ['jpg','jpeg','png','webp'];
    $maxImageMB = 5;

    $imageExt = strtolower($image->getClientOriginalExtension());

    if (!in_array($imageExt, $allowedImages)) {
        return back()
            ->withErrors(['images' => 'Invalid image format. Allowed: jpg, jpeg, png, webp'])
            ->withInput();
    }

    if ($image->getSize() > ($maxImageMB * 1024 * 1024)) {
        return back()
            ->withErrors(['images' => "Image must not exceed {$maxImageMB} MB"])
            ->withInput();
    }

    // -------------------------------
    // 4️⃣ Ensure folders exist
    // -------------------------------
    $audioPath = public_path('audio_messages');
    $imagePath = public_path('images');

    if (!file_exists($audioPath)) mkdir($audioPath, 0775, true);
    if (!file_exists($imagePath)) mkdir($imagePath, 0775, true);

    // -------------------------------
    // 5️⃣ Store files
    // -------------------------------
    $audioName = time() . '_' . preg_replace('/\s+/', '_', $audio->getClientOriginalName());
    $audio->move($audioPath, $audioName);

    $imageName = time() . '_' . preg_replace('/\s+/', '_', $image->getClientOriginalName());
    $image->move($imagePath, $imageName);

    // -------------------------------
    // 6️⃣ Save to DB
    // -------------------------------
    Messages::create([
        'header'  => $request->header,
        'audio'   => 'audio_messages/' . $audioName,
        'images'  => 'images/' . $imageName,
        'message' => $request->message,
    ]);

    return redirect()->back()->with('success', 'Message uploaded successfully!');
}


          
}
