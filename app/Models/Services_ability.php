<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Services_ability extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'person_id',
        'ability_id',
    ];

    protected $dates = [
        'deleted_at',
    ];

}
