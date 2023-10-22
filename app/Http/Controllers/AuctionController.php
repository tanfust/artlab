<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {
        $auctions = Auction::all();
        return view('back-office/auction', compact('auctions'));
    }
    public function frontPage()
    {
        //adding the auction list here
        //tell brahim to add a name field to artwork
        $auctions = Auction::all();
        return view('front-office/auctions', compact('auctions'));
    }
    public function create()
    {
        $artworks = Artwork::all();
        return view('back-office/AuctionCreate', compact('artworks'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'artwork_id' => 'required|exists:artworks,id',
            'startingPrice' => 'required|numeric|min:0',
            'startDate' => 'required|date',
            'endDate' => 'required|date|end_date_after_start:startDate',
            'description' => 'required',
        ]);
        Auction::create($request->post());
        return redirect()->route('auctions.index')->with('success', 'Auction created successfully');
    }
    public function show($id)
    {
        $auction = Auction::findOrFail($id);
        return view('auctions.show', compact('auction'));
    }
    public function edit($id)
    {
        $auction = Auction::findOrFail($id);
        return view('back-office/AuctionUpdate', compact('auction'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'artwork_id' => 'required|exists:artworks,id',
            'startingPrice' => 'required|numeric|min:0',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
            'description' => 'required',
        ]);
        $auction = Auction::findOrFail($id);
        $auction->update($request->all());
        return redirect()->route('auctions.index')->with('success', 'Auction updated successfully');
    }

    public function destroy($id)
    {
        $auction = Auction::findOrFail($id);
        $auction->delete();
        return redirect()->route('auctions.index')->with('success', 'Auction deleted successfully');
    }
}
