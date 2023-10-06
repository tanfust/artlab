<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {

        $auctions = Auction::all();
        return view('back-office/auction', compact('auctions'));

    }
    public function create()
    {
        return view('back-office/AuctionCreate');
    }
    public function store(Request $request)
    {
        $request->validate([
            // 'artwork_id' => 'required|exists:artworks,id',
            'startingPrice' => 'required|numeric|min:0',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
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
        return view('auctions.edit', compact('auction'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'artwork_id' => 'required|exists:artworks,id',
            'startingPrice' => 'required|numeric|min:0',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
        ]);
        $auction = Auction::findOrFail($id);
        $auction->update($request->all());

        // Redirect to the index page or show a success message
        return redirect()->route('auctions.index')->with('success', 'Auction updated successfully');
    }

    public function destroy($id)
    {
        $auction = Auction::findOrFail($id);
        $auction->delete();

        // Redirect to the index page or show a success message
        return redirect()->route('auctions.index')->with('success', 'Auction deleted successfully');
    }
}