<?php

namespace App\Http\Controllers;

use App\Models\Girl;
use Illuminate\Http\Request;

class GirlController extends Controller
{
    public function index()
    {
        $girls = Girl::all();
        return view('girls.index', compact('girls'));
    }

    public function create()
    {
        return view('girls.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'age_group' => 'required|string|max:10',
            'hiv_status' => 'required|string|max:10',
            'date_of_birth' => 'required|date',
            'village' => 'required|string|max:255',
            'schooling_status' => 'required|string|max:50',
        ]);

        Girl::create($request->all());

        return redirect()->route('girls.index')->with('success', 'Girl enrolled successfully.');
    }

    public function show(Girl $girl)
    {
        return view('girls.show', compact('girl'));
    }

    public function edit(Girl $girl)
    {
        return view('girls.edit', compact('girl'));
    }

    public function update(Request $request, Girl $girl)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'age_group' => 'required|string|max:10',
            'hiv_status' => 'required|string|max:10',
            'date_of_birth' => 'required|date',
            'village' => 'required|string|max:255',
            'schooling_status' => 'required|string|max:50',
        ]);

        $girl->update($request->all());

        return redirect()->route('girls.index')->with('success', 'Girl details updated successfully.');
    }

    public function destroy(Girl $girl)
    {
        $girl->delete();

        return redirect()->route('girls.index')->with('success', 'Girl removed successfully.');
    }
}
