<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Nationality extends Model
{
    public $keyType = 'string';
    public $incrementing = false;
    protected $table= 'nationalitys';
    protected $fillable = [
        'id',
        'id_user',
        'id_country',
        'created_at'
    ];
    public function user()
        {
            return $this->belongsTo(User::class,'id_user','id');
        }
}

