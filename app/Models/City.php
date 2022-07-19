<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'state_id' => 'integer',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function state()
    {

        return $this->belongsTo(State::class, 'state_id');

    }

}
