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
        'status',
        'slug',
        'photo',
    ];

    public function girl()
    {
        return $this->belongsTo(Girl::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public static function countActiveProgress()
    {
        return self::where('status', 'active')->count();
    }

    // Define the getProgressBySlug method
    public static function getProgressBySlug($slug)
    {
        return self::where('slug', $slug)->first();
    }
}
