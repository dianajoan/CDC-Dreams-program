<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\Girl;
use App\Models\Event;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function index()
    {
        $progresses = Progress::with('girl', 'event')->get();
        return view('progresses.index', compact('progresses'));
    }

    public function create()
    {
        $girls = Girl::all();
        $events = Event::all();
        return view('progresses.create', compact('girls', 'events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'girl_id' => 'required|exists:girls,id',
            'event_id' => 'required|exists:events,id',
            'lessons_attended' => 'required|string|max:255',
            'skills_attained' => 'required|string|max:255',
            'can_finish_program_without_hiv' => 'required|boolean',
            'can_be_standalone' => 'required|boolean',
        ]);

        Progress::create($request->all());

        return redirect()->route('progresses.index')->with('success', 'Progress recorded successfully.');
    }

    public function show(Progress $progress)
    {
        return view('progresses.show', compact('progress'));
    }

    public function edit(Progress $progress)
    {
        $girls = Girl::all();
        $events = Event::all();
        return view('progresses.edit', compact('progress', 'girls', 'events'));
    }

    public function update(Request $request, Progress $progress)
    {
        $request->validate([
            'girl_id' => 'required|exists:girls,id',
            'event_id' => 'required|exists:events,id',
            'lessons_attended' => 'required|string|max:255',
            'skills_attained' => 'required|string|max:255',
            'can_finish_program_without_hiv' => 'required|boolean',
            'can_be_standalone' => 'required|boolean',
        ]);

        $progress->update($request->all());

        return redirect()->route('progresses.index')->with('success', 'Progress updated successfully.');
    }

    public function destroy(Progress $progress)
    {
        $progress->delete();

        return redirect()->route('progresses.index')->with('success', 'Progress removed successfully.');
    }
}
