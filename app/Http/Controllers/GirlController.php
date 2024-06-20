<?php

namespace App\Http\Controllers;

use App\Models\Girl;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GirlController extends Controller
{
    public function index()
    {
        $girls = Girl::all();
        return view('backend.girls.index', compact('girls'));
    }

    public function create()
    {
        return view('backend.girls.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'age_group' => 'required|in:10-14,15-19',
            'hiv_status' => 'required|in:positive,negative',
            'date_of_birth' => 'required|date',
            'village' => 'required|string|max:255',
            'schooling_status' => 'required|string|max:50',
            'status' => 'required|in:active,inactive',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $slug = Str::slug($request->name);
        $count = Girl::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        $status = Girl::create($data);

        if ($status) {
            request()->session()->flash('success', 'Girl successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding girl');
        }

        return redirect()->route('girls.index')->with('success', 'Girl enrolled successfully.');
    }

    public function show(Girl $girl)
    {
        return view('backend.girls.show', compact('girl'));
    }

    public function edit(Girl $girl)
    {
        return view('backend.girls.edit', compact('girl'));
    }

    public function update(Request $request, Girl $girl)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'age_group' => 'required|in:10-14,15-19',
            'hiv_status' => 'required|in:positive,negative',
            'date_of_birth' => 'required|date',
            'village' => 'required|string|max:255',
            'schooling_status' => 'required|string|max:50',
            'status' => 'required|in:active,inactive',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $status = $girl->fill($data)->save();

        if ($status) {
            request()->session()->flash('success', 'Girl successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating girl');
        }

        return redirect()->route('girls.index')->with('success', 'Girl details updated successfully.');
    }

    public function destroy(Girl $girl)
    {
        $girl->delete();

        return redirect()->route('girls.index')->with('success', 'Girl removed successfully.');
    }
}
