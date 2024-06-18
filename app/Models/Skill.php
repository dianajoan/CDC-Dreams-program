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
    ];

    public static function countActiveSkill()
    {
        return self::where('status', 'active')->count();
    }
}
