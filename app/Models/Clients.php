<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = "clients";

    protected $fillable = [
        'user_id',
        'company_name',
        'npwp'
    ];
}
