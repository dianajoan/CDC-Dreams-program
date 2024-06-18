<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_name',
        'target_audience',
        'status',
    ];

    public static function countActiveMaterial()
    {
        return self::where('status', 'active')->count();
    }
}
