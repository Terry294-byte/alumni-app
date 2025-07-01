<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'event_date' => 'required|date',
            'location' => 'required|string',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success', 'Event created successfully!');
    }
    //edit
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'event_date' => 'required|date',
            'location' => 'required|string',
        ]);

        $event = Event::findOrFail($id);
        $event->update($request->all());

        return redirect()->route('events.index')->with('success', 'Event updated successfully!');
    }
    //destroy

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
    }
}
