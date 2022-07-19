<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Access_person extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'access_people';

    protected $fillable = [
        'person_id',
        'Access_security_id',
    ];

    protected $dates = [
        'deleted_at',
    ];
}
