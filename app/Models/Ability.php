<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ability extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function person(){
        return $this->belongsToMany(Person::class, 'services_abilities', 'ability_id', 'person_id');
    }
}
