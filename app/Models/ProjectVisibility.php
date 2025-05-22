<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectVisibility extends Model
{
    protected $table = "project_visibilities";
    protected $fillable = [
        'project_id',
        'supplier_id'
    ];

    public function projects(){
        return $this->hasOne(Project::class);
    }

    public function suppliers(){
        return $this->hasOne(Supplier::class);
    }
}
