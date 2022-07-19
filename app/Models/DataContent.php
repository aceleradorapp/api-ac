<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataContent extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'nameProject',
        'description',
        'url',
        'user_id',
        'projects_id',
        'project_types_id'
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function user(){
        return $this->BelongsTo(User::class);
    }

    public function projects(){
        return $this->BelongsTo(Project::class);
    }

    public function project_types(){
        return $this->BelongsTo(ProjectType::class);
    }
}

