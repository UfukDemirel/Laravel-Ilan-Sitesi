<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Advert extends Model
{
    protected $table = 'advert';

    public function advert(){
        return $this->select('*')
            ->join('users','users.id','=','advert.users_id')
            ->where('users.id','=',Auth::id())
            ->orderBy('advert.advert_id','desc')
            ->get();
    }

    public function create($id){
        return $this->select('*')
            ->join('users','users.id','=','advert.users_id')
            ->where('advert.advert_id','=',$id)
            ->get();
    }

    public function get(){
        return $this->select('*')
            ->join('users','users.id','=','advert.users_id')
            ->orderBy('advert.advert_id','desc')
            ->get();
    }

    public function ad(){
        return $this->select('*')->join('users','users.id','=','advert.users_id')->get();
    }
}
