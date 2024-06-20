<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_name',
        'status',
        'slug',
        'photo',
    ];

    public static function countActiveSkill()
    {
        return self::where('status', 'active')->count();
    }

    // Define the getSkillBySlug method
    public static function getSkillBySlug($slug)
    {
        return self::where('slug', $slug)->first();
    }
}
