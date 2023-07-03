<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
