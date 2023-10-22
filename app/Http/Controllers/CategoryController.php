<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $categories = Category::all();
        return view( 'back-office/categories.index', compact( 'categories' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        return view( 'back-office/categories.create' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        Category::create( $request->all() );

        return redirect()->route( 'categories.index' )->with( 'success', 'Category has been created successfully' );
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $category = Category::findOrFail( $id );
        return view( 'back-office/categories.show', compact( 'category' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        $category = Category::findOrFail( $id );
        return view( 'back-office/categories.edit', compact( 'category' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $category = Category::findOrFail( $id );
        $category->update( $request->all() );

        return redirect()->route( 'categories.index' )->with( 'success', 'Category has been updated successfully' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        $category = Category::findOrFail( $id );
        $category->delete();

        return redirect()->route( 'categories.index' )->with( 'success', 'Category has been deleted successfully' );
    }
}
