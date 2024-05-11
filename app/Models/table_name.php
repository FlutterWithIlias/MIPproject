<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_name extends Model
{
    protected $fillable = [
        'temperature',
        'humidite',
    ];
    use HasFactory;
}
