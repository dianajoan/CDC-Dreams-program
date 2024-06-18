<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_type',
        'learning_outcomes',
        'start_date',
        'end_date',
    ];

    public function progresses()
    {
        return $this->hasMany(Progress::class);
    }
}
