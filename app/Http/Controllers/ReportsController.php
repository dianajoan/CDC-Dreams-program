<?php

// app/Http/Controllers/ReportsController.php
namespace App\Http\Controllers;

use App\Models\Girl;
use App\Models\Event;
use App\Models\Progress;
use App\Models\Material;
use App\Models\Skill;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        // Fetch data for reports
        $girls = Girl::all();
        $events = Event::all();
        $progresses = Progress::all();
        $materials = Material::all();
        $skills = Skill::all();

        // Ensure data is correctly formatted
        $girls->each(function($girl) {
            $girl->age = (int) $girl->age;
        });

        $progresses->each(function($progress) {
            $progress->lessons_attended = (int) $progress->lessons_attended;
            $progress->skills_attained = (int) $progress->skills_attained;
        });

        $materials->each(function($material) {
            $material->quantity = (int) $material->quantity;
        });

        $skills->each(function($skill) {
            $skill->level = (int) $skill->level;
        });

        // Return view with data
        return view('backend.reports.index', compact('girls', 'events', 'progresses', 'materials', 'skills'));
    }
}

