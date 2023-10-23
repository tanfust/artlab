<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\Gallery;

class ArtworkController extends Controller
{
    public function index()
    {
       
        $artworks = Artwork::all();

        return view('back-office/artwork/index', compact('artworks'));
    }
    public function create(){
        
        return view('back-office/artwork/create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'imageName' => 'required',
            'Price' => 'required',
            'Description' => 'required',
            'Name' => 'required',
            'gallery_id' => 'required' ,
            
        ]);
        if ($request->hasFile('imageName')) {
           
            // Store the uploaded file and get the URL
            $photoUrl = $request->file('imageName')->store('', 'public_img'); 
        }
    

        Artwork::create([
            'imageName' => $photoUrl ,
            'Description' => $request->input('Description'),
            'Name' => $request->input('Name'),
            'Price' => $request->input('Price'),
            'gallery_id' => $request->input('gallery_id'),

       ]);
       
    
        return redirect()->route('artwork.index')->with('success','artwork has been created successfully.');
        }

        public function edit(Artwork $Artwork)
     {
        return view('back-office/artwork/edit',compact('Artwork'));
     }

     public function update(Request $request, Artwork $Artwork)
     {
         {
             $request->validate([
                'imageName' => 'sometimes|image',
                'Price' => 'required',
                'Description' => 'required',
                'Name' => 'required',
            
             ]);
         
             $Artwork->Price = $request->input('Price');
             $Artwork->Description = $request->input('Description');
             $Artwork->Name = $request->input('Name');
             
         
             if ($request->hasFile('imageName')) {
                 // Handle the new photo upload and update the 'photo' field
                 $photoUrl = $request->file('imageName')->store('', 'public_img');
                 
         
                 // Update the 'photo' field with the new path
                 $Artwork->imageName = $photoUrl;
             }
         
             $Artwork->save();
         }
         
 
     return redirect()->route('Gallery.index')->with('success','Gallery Has Been updated successfully');
     }
        public function destroy(Artwork $Artwork)
        {
            $Artwork->delete();
            return redirect()->route('artwork.index')->with('success','Artwork has been deleted successfully');
        }

}
