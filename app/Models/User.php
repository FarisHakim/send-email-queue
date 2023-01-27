<?php

namespace App\Models;

use App\Models\Nationality;
use App\Models\Age;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'fullname',
        'email',
        'firstname',
        'lastname',
        'address',
        'created_at'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function age(): HasOne
    {
        return $this->hasOne(Age::class, 'id', 'id_user');
    }
    
    public function nationality(): HasOne
    {
        return $this->hasOne(Nationality::class, 'id', 'id_user');
    }

}
