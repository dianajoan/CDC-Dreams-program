<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        return view('backend.materials.index', compact('materials'));
    }

    public function create()
    {
        return view('backend.materials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'material_name' => 'required|string|max:255',
            'target_age_group' => 'required|in:10-14,15-19',
            'status' => 'required|in:active,inactive',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $slug = Str::slug($request->name);
        $count = Material::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        $status = Material::create($data);

        if ($status) {
            request()->session()->flash('success', 'Material successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding material');
        }

        return redirect()->route('materials.index')->with('success', 'Material added successfully.');
    }

    public function show(Material $material)
    {
        return view('backend.materials.show', compact('material'));
    }

    public function edit(Material $material)
    {
        return view('backend.materials.edit', compact('material'));
    }

    public function update(Request $request, Material $material)
    {
        $request->validate([
            'material_name' => 'required|string|max:255',
            'target_age_group' => 'required|in:10-14,15-19',
            'status' => 'required|in:active,inactive',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $status = $material->fill($data)->save();

        if ($status) {
            request()->session()->flash('success', 'Event successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating event');
        }

        return redirect()->route('materials.index')->with('success', 'Material updated successfully.');
    }

    public function destroy(Material $material)
    {
        $material->delete();

        return redirect()->route('materials.index')->with('success', 'Material removed successfully.');
    }
}
