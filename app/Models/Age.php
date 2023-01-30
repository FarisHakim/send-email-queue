<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    public $keyType = 'string';
    public $incrementing = false;
    protected $table= 'ages';
    protected $fillable = [
        'id',
        'id_user',
        'age',
        'count',
        'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
}
