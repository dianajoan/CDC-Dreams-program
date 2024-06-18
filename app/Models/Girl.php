<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Girl extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'age_group',
        'hiv_status',
        'date_of_birth',
        'village',
        'schooling_status',
        'status',
    ];

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }

    public static function countActiveGirl()
    {
        return self::where('status', 'active')->count();
    }
}
