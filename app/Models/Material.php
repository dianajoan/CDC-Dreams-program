<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_name',
        'target_age_group',
        'status',
        'slug',
        'photo',
    ];

    public static function countActiveMaterial()
    {
        return self::where('status', 'active')->count();
    }

    // Define the getMaterialBySlug method
    public static function getMaterialBySlug($slug)
    {
        return self::where('slug', $slug)->first();
    }
}
