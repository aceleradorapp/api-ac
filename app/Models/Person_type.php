<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person_type extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'person_types';

    protected $fillable = [
        'person_id',
        'type_id',
    ];

    protected $dates = [
        'deleted_at',
    ];


}
