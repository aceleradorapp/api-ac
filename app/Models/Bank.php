<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bancks';

    protected $fillable = [
        'user_id',
        'cpf',
        'bank',
        'numberBank',
        'ag',
        'cc',
        'pix'
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function user(){
        return $this->BelongsTo(User::class);
    }

}
