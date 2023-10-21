<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Event; // Import the Event model

class EventController extends Controller
{


public function index()
{
    $events = Event::all(); // Retrieve all events
    return view('events.index', compact('events')); // Pass data to the view
}

public function create()
{
    return view('events.create'); // Show the form to create a new event
}

public function store(Request $request)
{
    // Validate the incoming data
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'date' => 'required|date',
    ]);

    // Create a new event
    Event::create($validatedData);

    return redirect()->route('events.index')
        ->with('success', 'Event created successfully');
}

public function show(Event $event)
{
    return view('events.show', compact('event')); // Display a single event
}

public function edit(Event $event)
{
    return view('events.edit', compact('event')); // Show the edit form for an event
}

public function update(Request $request, Event $event)
{
    // Validate the incoming data
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'date' => 'required|date',
    ]);

    // Update the event
    $event->update($validatedData);

    return redirect()->route('events.index')
        ->with('success', 'Event updated successfully');
}

public function destroy(Event $event)
{
    $event->delete(); // Delete the event
    return redirect()->route('events.index')
        ->with('success', 'Event deleted successfully');
}

}
