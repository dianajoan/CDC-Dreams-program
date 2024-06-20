<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('backend.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('backend.skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'skill_name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $slug = Str::slug($request->name);
        $count = Skill::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        $status = Skill::create($data);

        if ($status) {
            request()->session()->flash('success', 'Skill successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding skill');
        }

        return redirect()->route('skills.index')->with('success', 'Skill added successfully.');
    }

    public function show(Skill $skill)
    {
        return view('backend.skills.show', compact('skill'));
    }

    public function edit(Skill $skill)
    {
        return view('backend.skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'skill_name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $status = $skill->fill($data)->save();

        if ($status) {
            request()->session()->flash('success', 'Skill successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating skill');
        }

        return redirect()->route('skills.index')->with('success', 'Skill updated successfully.');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('skills.index')->with('success', 'Skill removed successfully.');
    }
}
