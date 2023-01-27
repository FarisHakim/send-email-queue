<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    use HasFactory;
    protected $table = 'nationalitys';

    protected $fillable = [
        'id',
        'id_user',
        'id_country',
        'created_at'
    ];
 
}
