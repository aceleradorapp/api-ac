<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person_legal extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'fantasyName',
        'cnpj',
        'businessActivity',
        'registrationDate'
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function person(){
        return $this->belongsTo(Person::class);
    }
}
