<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
 {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
 {

        $articles = Article::all();
        return view( 'back-office/articles.index', compact( 'articles' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create()
 {
        //
        return view( 'back-office/articles.create' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
{
    $input = $request->all();

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        if ($file->isValid()) {
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('assets/img/articles'), $file_name);
            $input['image'] = "assets/img/articles/$file_name";
        }
    } else {
        $input['image'] = 'assets/img/notFoundImg.png';
    }

    Article::create($input);
    error_log('Some message here 22.');

    return redirect()->route('articles.index')->with('success', 'Article has been created successfully.');
}


    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id )
 {
        //
        $article = Article::findOrFail( $id );
        return view( 'back-office/articles.show', compact( 'article' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id )
 {
        $article = Article::findOrFail( $id );
        return view( 'back-office/articles.edit', compact( 'article' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id)
 {
        //
        //     $request->validate( [
        //         'articleTitle' => 'required',
        //         'articleContent' => 'required',
        // ] );

        //     $article->fill( $request->post() )->save();

        //     return redirect()->route( 'articles.index' )->with( 'success', 'article Has Been updated successfully' );
        //
        $article = Article::findOrFail( $id );

        $input = $request->all();
        if ( $request->hasFile( 'image' ) ) {
            $file_name = $request->file( 'image' )->getClientOriginalName();
            $request->image->move( public_path( 'assets/img/articles' ), $file_name );
            $input[ 'image' ] = "assets/img/articles/$file_name";
        } else {
            $input[ 'image' ] = $article->image;
        }
        $input['isPublished'] = $request->has('isPublished');
        $article->update( $input );

        // Redirect to the index page or show a success message
        return redirect()->route( 'articles.index' )->with( 'success', 'article has been created successfully.' );

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id )
 {
        //
        $article = Article::findOrFail( $id );
        $article->delete();
        return redirect()->route( 'articles.index' )->with( 'success', 'article has been deleted successfully' );
    }

    public function showBlog()
{
    $articles = Article::paginate(2);
    return view('front-office.blog', compact('articles'));
}
}
