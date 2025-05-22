<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "suppliers";
    protected $fillable = [
        'name',
        'company_id'
    ];

    public function companies(){
        return $this->hasOne(Company::class);
    }

     public function project_visibility(){
        return $this->belongsTo(ProjectVisibility::class);
    }
}
