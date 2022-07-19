<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'people';

    protected $fillable = [
        'user_id',
        'person_physical_id',
        'person_legal_id',
        'type',
        'email',
        'photo'
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function user(){
        return $this->BelongsTo(User::class);
    }

    // public function access_security(){
    //     return $this->hasOne(Access_security::class);
    // }

    public function person_physical(){
        return $this->hasOne(Person_physical::class);
    }

    public function person_legal(){
        return $this->hasOne(Person_legal::class);
    }

    public function phone(){
        return $this->hasMany(Phone::class);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }

    public function types(){
        return $this->belongsToMany(Type::class, 'person_types', 'person_id', 'type_id');
    }

    public function ability(){
        return $this->belongsToMany(Ability::class, 'services_abilities', 'person_id', 'ability_id');
    }

    public function access_securitys(){
        return $this->belongsToMany(Access_person::class, 'access_people', 'person_id', 'Access_security_id');
    }
}
