<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Article;
use App\Models\Order;
use App\Models\User;

class ProfileController extends Controller
{

       public function index()
 {
    $user = Auth::user(); 

    $articleCount = Article::where('user_id', $user->id)->count();
    //$orderCount = Order::where('user_id', $user->id)->count();
    return view('back-office/profile.index',compact('user','articleCount')); }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request,$id): View
    {


        $user = User::findOrFail($id);
        return view('back-office/profile.edit', compact('user'));

    //     return view('back-office/profile.edit', [
    //         'user' => $request->user(),
    //     ]);
     }

    public function show( $id )
 {
        //
        $user = User::findOrFail( $id );
        return view( 'back-office/profile.show', compact( 'user' ) );
    }
    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id)
    { 
        // dd($request->all());
        $user = User::findOrFail($id);
        $input = $request->all();
        if ( $request->hasFile( 'image' ) ) {
            $file_name = $request->file( 'image' )->getClientOriginalName();
            $request->image->move( public_path( 'assets/img/users' ), $file_name );
            $input[ 'image' ] = "assets/img/users/$file_name";
           
        } else {
            $input[ 'image' ] = $user->image;
        }
        $input[ 'cover' ] = "";
        if ( $request->hasFile( 'cover' ) ) {
            $file_name = $request->file( 'cover' )->getClientOriginalName();
            $request->cover->move( public_path( 'assets/img/users' ), $file_name );
            $input[ 'cover' ] = "assets/img/users/$file_name";
        } else {
            $input[ 'cover' ] = $user->cover;
        }

       $user->update( $input );


        return redirect()->route( 'profile.index' )->with( 'success', 'user has been updated successfully.' );

    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
