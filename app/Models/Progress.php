<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $fillable = [
        'girl_id',
        'event_id',
        'lessons_attended',
        'skills_attained',
        'finish_without_hiv',
        'standalone_in_community',
    ];

    public function girl()
    {
        return $this->belongsTo(Girl::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}