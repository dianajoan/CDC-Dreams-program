<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('backend.events.index', compact('events'));
    }

    public function create()
    {
        return view('backend.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_type' => 'required|string|max:255',
            'learning_outcomes' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|in:active,inactive',
            'location' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $slug = Str::slug($request->name);
        $count = Event::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        $status = Event::create($data);

        if ($status) {
            request()->session()->flash('success', 'Event successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding event');
        }

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function show(Event $event)
    {
        return view('backend.events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('backend.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'event_type' => 'required|string|max:255',
            'learning_outcomes' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'location' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $status = $event->fill($data)->save();

        if ($status) {
            request()->session()->flash('success', 'Event successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating event');
        }


        return redirect()->route('events.index')->with('success', 'Event details updated successfully.');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event removed successfully.');
    }
}
