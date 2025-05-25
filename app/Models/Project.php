<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'name',
        'description',
        'status',
        'start_date',
        'end_date',
        'client_id',
        'company_id'
    ];

    public function clients(){
        return $this->hasOne(User::class);
    }

    public function companies(){
        return $this->hasOne(Company::class);
    }

    public function project_visibility(){
        return $this->belongsTo(ProjectVisibility::class);
    }
}
