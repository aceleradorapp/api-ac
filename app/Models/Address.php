<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'person_id',
        'street',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'zipCode'
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function person(){
        return $this->BelongsTo(Person::class);
    }
}
