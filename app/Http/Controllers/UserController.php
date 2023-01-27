<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Nationality;
use App\Models\Age;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function getAllName()
    {
        $name=User::pluck('firstname','id');
        return $name;
    }
}
