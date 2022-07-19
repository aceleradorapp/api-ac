<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'person_id',
        'number',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function person(){
        return $this->BelongsTo(Person::class);
    }
}
