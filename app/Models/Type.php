<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'person_id',
        'type_id',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function person(){
        return $this->belongsToMany(Person::class, 'person_types', 'type_id', 'person_id');
    }
}
