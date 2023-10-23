<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Artwork;

class GalleryController extends Controller
{
    public function index()
    {     $collection = array(
        ['assets/img/col-1.png','assets/img/col-2.png','assets/img/col-3.png','assets/img/market-author-1.png','Photography',32],
        ['assets/img/col-4.png','assets/img/col-5.png','assets/img/col-6.png','assets/img/market-author-1.png','Photography',32],
        ['assets/img/col-7.png','assets/img/col-8.png','assets/img/col-9.png','assets/img/market-author-1.png','Photography',32],
        ['assets/img/col-10.png','assets/img/col-11.png','assets/img/col-12.png','assets/img/market-author-1.png','Photography',32],
        ['assets/img/col-12.png','assets/img/col-13.png','assets/img/col-14.png','assets/img/market-author-1.png','Photography',32],
        ['assets/img/col-6.png','assets/img/col-7.png','assets/img/col-8.png','assets/img/market-author-1.png','Photography',32],
        ['assets/img/col-1.png','assets/img/col-2.png','assets/img/col-3.png','assets/img/market-author-1.png','Photography',32],
        ['assets/img/col-1.png','assets/img/col-2.png','assets/img/col-3.png','assets/img/market-author-1.png','Photography',32],
        ['assets/img/col-1.png','assets/img/col-2.png','assets/img/col-3.png','assets/img/market-author-1.png','Photography',32],
        ['assets/img/col-1.png','assets/img/col-2.png','assets/img/col-3.png','assets/img/market-author-1.png','Photography',32],
    );
        $Gallery = Gallery::all();
        return view('back-office/galleries/MyCollection', compact('Gallery','collection'));
    }
    public function create()
    {
        return view('back-office/Galleries/create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'galleryName' => 'required',
            'creator_id' => 'required',
            'photo' => 'required',
            
        ]);
        if ($request->hasFile('photo')) {
            // Store the uploaded file and get the URL
            $photoUrl = $request->file('photo')->store('', 'public_img'); 
        }
    

        Gallery::create([
            'galleryName' => $request->input('galleryName'),
            'creator_id' => $request->input('creator_id'),
            'photo' => $photoUrl, // Store the URL
       ]);
       
    
        return redirect()->route('Gallery.index')->with('success','Gallery has been created successfully.');
        }

    public function edit(Gallery $Gallery)
     {
        return view('back-office/Galleries/edit',compact('Gallery'));
     }
     public function update(Request $request, Gallery $Gallery)
        {
            {
                $request->validate([
                    'galleryName' => 'required',
                    'creator_id' => 'required',
                    'photo' => 'sometimes|image',
                ]);
            
                $Gallery->galleryName = $request->input('galleryName');
                $Gallery->creator_id = $request->input('creator_id');
            
                if ($request->hasFile('photo')) {
                    // Handle the new photo upload and update the 'photo' field
                    $photoUrl = $request->file('photo')->store('', 'public_img');
                    
            
                    // Update the 'photo' field with the new path
                    $Gallery->photo = $photoUrl;
                }
            
                $Gallery->save();
            }
            
    
        return redirect()->route('Gallery.index')->with('success','Gallery Has Been updated successfully');
        }
        public function destroy(Gallery $Gallery)
        {
            $Gallery->delete();
            return redirect()->route('Gallery.index')->with('success','Gallery has been deleted successfully');
        }
 
        public function show(Gallery $Gallery)
        {
       
        $artworks = Artwork::where('gallery_id', $Gallery->id)->get();
        return  view('back-office/artwork/index',compact('Gallery','artworks'));
        }

}
