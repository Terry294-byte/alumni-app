<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'nullable',
        'event_date' => 'required|date',
        'location' => 'required',
        'image' => 'nullable|image|max:2048',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('events', 'public');
    }

    Event::create($data);

    return redirect()->route('admin.events.index')->with('success', 'Event created successfully!');
}
public function edit($id)
{
    $event = Event::findOrFail($id);
    return view('admin.events.edit', compact('event'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'description' => 'nullable',
        'event_date' => 'required|date',
        'location' => 'required',
        'image' => 'nullable|image|max:2048',
    ]);

    $event = Event::findOrFail($id);
    $data = $request->all();

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('events', 'public');
    }

    $event->update($data);

    return redirect()->route('admin.events.index')->with('success', 'Event updated successfully!');
}

}