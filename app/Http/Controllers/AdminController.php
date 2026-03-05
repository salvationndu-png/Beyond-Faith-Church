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
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function sanitizeFilePath($path)
    {
        $realPath = realpath(public_path($path));
        $basePath = realpath(public_path());
        
        if ($realPath === false || strpos($realPath, $basePath) !== 0) {
            return null;
        }
        
        return $realPath;
    }

    public function events_upload(Request $request)
    {
        $request->validate([
            'header' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string|max:50',
            'location' => 'required|string|max:255',
            'writeup' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        try {
            $imagename = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imagename);

            Events::create([
                'header' => $request->header,
                'date' => $request->date,
                'time' => $request->time,
                'location' => $request->location,
                'writeup' => $request->writeup,
                'image' => $imagename,
            ]);

            return redirect()->back()->with('message', 'New Event Added!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Failed to add event: ' . $e->getMessage());
        }
    }



public function ebookupload(Request $request)
{
    try {
        // ✅ Validate
        $request->validate([
            'header'  => 'required|string|max:255',
            'message' => 'required|string',
            'price'   => 'required|numeric',
            'images'  => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'pdf'     => 'required|file|mimes:pdf|max:51200',
        ]);

        // Ensure directories exist
        if (!file_exists(public_path('ebook_images'))) {
            mkdir(public_path('ebook_images'), 0775, true);
        }
        if (!file_exists(public_path('ebooks'))) {
            mkdir(public_path('ebooks'), 0775, true);
        }

        /* Store Cover Image */
        $imageName = time().'_cover.'.$request->images->getClientOriginalExtension();
        if (!$request->images->move(public_path('ebook_images'), $imageName)) {
            return redirect()->back()->with('message', 'Failed to upload cover image!');
        }

        /* Store Ebook File */
        $file = $request->file('pdf');
        $fileName = time().'_ebook.'.$file->getClientOriginalExtension();
        if (!$file->move(public_path('ebooks'), $fileName)) {
            return redirect()->back()->with('message', 'Failed to upload PDF file!');
        }

        /* Save to Database */
        Ebooks::create([
            'header'  => $request->header,
            'message' => $request->message,
            'price'   => $request->price,
            'images'  => 'ebook_images/'.$imageName,
            'pdf'     => $fileName,
            'pages'   => $request->pages,
            'file_size' => $request->file_size,
            'category' => $request->category,
        ]);

        return redirect()->back()->with('success', 'Ebook uploaded successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('message', 'Upload failed: ' . $e->getMessage());
    }
}

    public function contact_upload(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        try {
            Contacts::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Failed to send message.');
        }
    }


    public function events_id_upload(Request $request, $id)
    {
        $request->validate([
            'header' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string|max:50',
            'location' => 'required|string|max:255',
            'writeup' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        try {
            $data = Events::findOrFail($id);
            $data->header = $request->header;
            $data->date = $request->date;
            $data->time = $request->time;
            $data->location = $request->location;
            $data->writeup = $request->writeup;

            if ($request->hasFile('image')) {
                $imagename = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images'), $imagename);
                
                if ($data->image) {
                    $oldImagePath = $this->sanitizeFilePath('images/' . basename($data->image));
                    if ($oldImagePath && file_exists($oldImagePath)) {
                        @unlink($oldImagePath);
                    }
                }
                
                $data->image = $imagename;
            }

            $data->save();
            return redirect()->back()->with('message', 'Update Successful!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Update failed.');
        }
    }

    public function message_id_upload(Request $request, $id)
    {
        $request->validate([
            'header' => 'required|string|max:255',
            'message' => 'required|string',
            'images' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        try {
            $data = Messages::findOrFail($id);
            $data->header = $request->header;
            $data->message = $request->message;

            if ($request->hasFile('images')) {
                $imagename = time() . '.' . $request->file('images')->getClientOriginalExtension();
                $request->file('images')->move(public_path('images'), $imagename);

                if ($data->images) {
                    $oldImagePath = $this->sanitizeFilePath($data->images);
                    if ($oldImagePath && file_exists($oldImagePath)) {
                        @unlink($oldImagePath);
                    }
                }

                $data->images = 'images/' . $imagename;
            }

            $data->save();
            return redirect()->back()->with('success', 'Update Successful!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Update failed.');
        }
    }
    public function ebooks_id_upload(Request $request, $id)
    {
        $request->validate([
            'header' => 'required|string|max:255',
            'message' => 'required|string',
            'images' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        try {
            $data = Ebooks::findOrFail($id);
            $data->header = $request->header;
            $data->message = $request->message;

            if ($request->hasFile('images')) {
                $imagename = time() . '.' . $request->file('images')->getClientOriginalExtension();
                $request->file('images')->move(public_path('images'), $imagename);

                if ($data->images) {
                    $oldImagePath = $this->sanitizeFilePath($data->images);
                    if ($oldImagePath && file_exists($oldImagePath)) {
                        @unlink($oldImagePath);
                    }
                }

                $data->images = 'images/' . $imagename;
            }

            $data->save();
            return redirect()->back()->with('success', 'Update Successful!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Update failed.');
        }
    }



    public function gallery_id_upload(Request $request, $id)
    {
        $request->validate([
            'header' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
        ]);

        try {
            $data = GalleryItem::findOrFail($id);
            $data->header = $request->header;
            $data->subject = $request->subject;
            $data->save();

            return redirect()->back()->with('message', 'Update Successful!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Update failed.');
        }
    }

    public function events(Request $request)
    {
      $query = Events::query();
      
      if ($request->search) {
          $query->where(function($q) use ($request) {
              $q->where('header', 'like', '%'.$request->search.'%')
                ->orWhere('location', 'like', '%'.$request->search.'%')
                ->orWhere('writeup', 'like', '%'.$request->search.'%');
          });
      }
      
      $sortBy = $request->get('sort', 'created_at');
      $sortOrder = $request->get('order', 'desc');
      $query->orderBy($sortBy, $sortOrder);
      
      $data = $query->paginate(10)->withQueryString();

     return view('admin.events',compact('data'));
    }
    
    public function messages(Request $request)
    {
      $query = Messages::query();
      
      if ($request->search) {
          $query->where(function($q) use ($request) {
              $q->where('header', 'like', '%'.$request->search.'%')
                ->orWhere('message', 'like', '%'.$request->search.'%');
          });
      }
      
      $sortBy = $request->get('sort', 'created_at');
      $sortOrder = $request->get('order', 'desc');
      $query->orderBy($sortBy, $sortOrder);
      
      $data = $query->paginate(10)->withQueryString();
      
     return view('admin.messages',compact('data'));
    }

    public function admingallery(Request $request)
    {
      $query = GalleryItem::query();
      
      if ($request->search) {
          $query->where(function($q) use ($request) {
              $q->where('header', 'like', '%'.$request->search.'%')
                ->orWhere('subject', 'like', '%'.$request->search.'%');
          });
      }
      
      $sortBy = $request->get('sort', 'created_at');
      $sortOrder = $request->get('order', 'desc');
      $query->orderBy($sortBy, $sortOrder);
      
      $data = $query->paginate(10)->withQueryString();
     
     return view('admin.admingallery',compact('data'));
    }
    
    public function ebooks(Request $request)
    {
      $query = Ebooks::query();
      
      if ($request->search) {
          $query->where(function($q) use ($request) {
              $q->where('header', 'like', '%'.$request->search.'%')
                ->orWhere('message', 'like', '%'.$request->search.'%');
          });
      }
      
      $sortBy = $request->get('sort', 'created_at');
      $sortOrder = $request->get('order', 'desc');
      $query->orderBy($sortBy, $sortOrder);
      
      $data = $query->paginate(10)->withQueryString();

     return view('admin.ebooks',compact('data'));
    }
    
    public function ebooksource(Request $request)
    {
      $query = Ebooks::query();
      
      if ($request->search) {
          $query->where(function($q) use ($request) {
              $q->where('header', 'like', '%'.$request->search.'%')
                ->orWhere('message', 'like', '%'.$request->search.'%');
          });
      }
      
      $sortBy = $request->get('sort', 'created_at');
      $sortOrder = $request->get('order', 'desc');
      $query->orderBy($sortBy, $sortOrder);
      
      $data = $query->paginate(10)->withQueryString();

     return view('admin.ebooksource',compact('data'));
    }
    
    public function contacts(Request $request)
    {
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
      
      $data = $query->paginate(10)->withQueryString();

     return view('admin.contacts', compact('data'));
    }
    public function delete_event($id)
    {
        try {
            $data = Events::findOrFail($id);
            
            if ($data->image) {
                $imagePath = $this->sanitizeFilePath('images/' . basename($data->image));
                if ($imagePath && file_exists($imagePath)) {
                    @unlink($imagePath);
                }
            }
            
            $data->delete();
            return redirect()->back()->with('message', 'Event Deleted!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Failed to delete event.');
        }
    }

    public function ebook_delete($id)
    {
        try {
            $data = Ebooks::findOrFail($id);
            
            if ($data->images) {
                $imagePath = $this->sanitizeFilePath($data->images);
                if ($imagePath && file_exists($imagePath)) {
                    @unlink($imagePath);
                }
            }
            if ($data->pdf) {
                $pdfPath = $this->sanitizeFilePath('ebooks/' . basename($data->pdf));
                if ($pdfPath && file_exists($pdfPath)) {
                    @unlink($pdfPath);
                }
            }
            
            $data->delete();
            return redirect()->back()->with('success', 'Ebook Deleted!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Failed to delete ebook.');
        }
    }

    public function gallery_delete($id)
    {
        try {
            $data = GalleryItem::findOrFail($id);
            
            if ($data->images && is_array($data->images)) {
                foreach ($data->images as $image) {
                    $imagePath = $this->sanitizeFilePath($image);
                    if ($imagePath && file_exists($imagePath)) {
                        @unlink($imagePath);
                    }
                }
            }
            
            $data->delete();
            return redirect()->back()->with('success', 'Gallery Item Deleted!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Failed to delete gallery item.');
        }
    }

    public function delete_message($id)
    {
        try {
            $data = Messages::findOrFail($id);
            
            if ($data->images) {
                $imagePath = $this->sanitizeFilePath($data->images);
                if ($imagePath && file_exists($imagePath)) {
                    @unlink($imagePath);
                }
            }
            if ($data->audio) {
                $audioPath = $this->sanitizeFilePath($data->audio);
                if ($audioPath && file_exists($audioPath)) {
                    @unlink($audioPath);
                }
            }
            
            $data->delete();
            return redirect()->back()->with('success', 'Message Deleted!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Failed to delete message.');
        }
    }

    public function delete_ebook($id)
    {
        return $this->ebook_delete($id);
    }

    public function event_id($id)
    {
        $data = Events::findOrFail($id);
        return view('admin.aevents_id', compact('data'));
    }

    public function getEbook($encrypted)
    {
        try {
            $id = decrypt($encrypted);
            $ebook = Ebooks::findOrFail($id);
            $reference = 'ebook_' . bin2hex(random_bytes(8));
            return view('user.e-books', compact('ebook', 'reference', 'encrypted'));
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function audio_id($id)
    {
        $data = Messages::findOrFail($id);
        return view('user.audio', compact('data'));
    }

    public function message_id($id)
    {
        $data = Messages::findOrFail($id);
        return view('admin.messages-id', compact('data'));
    }  







    public function uploadGallery(Request $request)
    {
        $request->validate([
            'header' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'images' => 'required|array|max:10',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        try {
            if (!file_exists(public_path('galleries'))) {
                mkdir(public_path('galleries'), 0775, true);
            }

            $imagePaths = [];

            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('galleries'), $filename);
                $imagePaths[] = 'galleries/' . $filename;
            }

            GalleryItem::create([
                'header' => $request->header,
                'subject' => $request->subject,
                'images' => $imagePaths,
            ]);

            return back()->with('success', 'Gallery uploaded successfully');
        } catch (\Exception $e) {
            return back()->with('message', 'Failed to upload gallery.');
        }
    }


    public function gallery_id($id)
    {
        $data = GalleryItem::findOrFail($id);
        return view('admin.gallery-edit', compact('data'));
    }

    public function ebook_edit($id)
    {
        $data = Ebooks::findOrFail($id);
        return view('admin.ebook-edit', compact('data'));
    }



    public function messageupload(Request $request)
    {
        $request->validate([
            'header' => 'required|string|max:255',
            'audio' => 'required|file|mimes:mp3,wav,ogg|max:51200',
            'images' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'message' => 'required|string',
        ]);

        try {
            $audioPath = public_path('audio_messages');
            $imagePath = public_path('images');

            if (!file_exists($audioPath)) mkdir($audioPath, 0775, true);
            if (!file_exists($imagePath)) mkdir($imagePath, 0775, true);

            $audio = $request->file('audio');
            $audioName = time() . '_' . Str::slug(pathinfo($audio->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $audio->getClientOriginalExtension();
            $audio->move($audioPath, $audioName);

            $image = $request->file('images');
            $imageName = time() . '_' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $image->getClientOriginalExtension();
            $image->move($imagePath, $imageName);

            Messages::create([
                'header' => $request->header,
                'audio' => 'audio_messages/' . $audioName,
                'images' => 'images/' . $imageName,
                'message' => $request->message,
            ]);

            return redirect()->back()->with('success', 'Message uploaded successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Failed to upload message.');
        }
    }
}
