<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
        ]);

        Location::create($validatedData);

        return redirect()->route('locations.index')
            ->with('success', 'Location created successfully');
    }

    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    public function edit(Location $location)
    {
        return view('locations.edit', compact('location'));
    }

    public function update(Request $request, Location $location)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
        ]);

        $location->update($validatedData);

        return redirect()->route('locations.index')
            ->with('success', 'Location updated successfully');
    }

    public function destroy(Location $location)
    {
        $location->delete();

        return redirect()->route('locations.index')
            ->with('success', 'Location deleted successfully');
    }
}
