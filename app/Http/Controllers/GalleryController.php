<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
class GalleryController extends Controller
{
    public function index()
    {
        $Gallery = Gallery::all();
        return view('back-office/galleries/MyCollection', compact('Gallery'));
    }
    public function create()
    {
        return view('back-office/Galleries/create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'galleryName' => 'required',
            
            
        ]);
    

    
        Gallery::create($validatedData);
    
        return redirect()->route('Gallery.index')->with('success','an artwork has been created successfully.');
        }

}
