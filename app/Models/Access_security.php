<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Access_security extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Access_securities';

    protected $fillable = [
        'person_id',
        'name',
        'level'
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function person(){
        return $this->belongsToMany(Person::class, 'access_people', 'Access_security_id', 'person_id');
    }
}
