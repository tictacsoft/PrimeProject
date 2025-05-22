<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = [
        'name'
    ];

    public function projects(){
        return $this->belongsTo(Project::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function suppliers(){
        return $this->belongsTo(Supplier::class);
    }
}
