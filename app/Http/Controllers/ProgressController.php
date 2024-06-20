<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\Girl;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgressController extends Controller
{
    public function index()
    {
        $progresses = Progress::with('girl', 'event')->get();
        return view('backend.progresses.index', compact('progresses'));
    }

    public function create()
    {
        $girls = Girl::all();
        $events = Event::all();
        return view('backend.progresses.create', compact('girls', 'events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'girl_id' => 'required|exists:girls,id',
            'event_id' => 'required|exists:events,id',
            'lessons_attended' => 'required|string|max:255',
            'skills_attained' => 'required|string|max:255',
            'finish_without_hiv' => 'required|string|max:255',
            'standalone_in_community' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $slug = Str::slug($request->name);
        $count = Progress::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        $status = Progress::create($data);

        if ($status) {
            request()->session()->flash('success', 'Progress successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding progress');
        }

        return redirect()->route('progresses.index')->with('success', 'Progress recorded successfully.');
    }

    public function show(Progress $progress)
    {
        return view('backend.progresses.show', compact('progress'));
    }

    public function edit(Progress $progress)
    {
        $girls = Girl::all();
        $events = Event::all();
        return view('backend.progresses.edit', compact('progress', 'girls', 'events'));
    }

    public function update(Request $request, Progress $progress)
    {
        $request->validate([
            'girl_id' => 'required|exists:girls,id',
            'event_id' => 'required|exists:events,id',
            'lessons_attended' => 'required|string|max:255',
            'skills_attained' => 'required|string|max:255',
            'finish_without_hiv' => 'required|string|max:255',
            'standalone_in_community' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $status = $progress->fill($data)->save();

        if ($status) {
            request()->session()->flash('success', 'Progress successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating progress');
        }

        return redirect()->route('progresses.index')->with('success', 'Progress updated successfully.');
    }

    public function destroy(Progress $progress)
    {
        $progress->delete();

        return redirect()->route('progresses.index')->with('success', 'Progress removed successfully.');
    }
}
