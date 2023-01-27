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
    public function getDataApi($url){
        $path='';
        $name=$this->getAllName();
        foreach ($name as $list) {
            $path=$path.'name[]='.$list.'&';
        }
        $url.=$path;
        $response=json_decode(HTTP::get($url));
        return $response;
    }
    public function getAge(){
        $user=$this->getAllName();
        $id=array_keys($user->toArray());
        $url='https://api.agify.io/?';
        $ages=array();
        $data=$this->getDataApi($url);
        for ($i=0; $i <count($data) ; $i++) { 
            $ages['id']=Str::uuid()->toString();;
            $ages['id_user']=$id[$i];
            $ages['count']=$data[$i]->count;
            $ages['age']=$data[$i]->age;
            Age::insert([$ages]);
        }
    }
    public function getNationality(){
        $nationalitys=array();
        $user=$this->getAllName();
        $id=array_keys($user->toArray());
        $url='https://api.nationalize.io/?';
        $data=$this->getDataApi($url);
        for ($i=0; $i <count($data) ; $i++) { 
            $nationalitys['id']=Str::uuid()->toString();;
            $nationalitys['id_user']=$id[$i];
            $nationalitys['id_country']=$data[$i]->country[0]->country_id;
            Nationality::insert([$nationalitys]);
        }
    }
}
