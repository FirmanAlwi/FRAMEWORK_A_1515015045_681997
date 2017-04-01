<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
     protected $table = 'ruangan';
     protected $fillable = ['title'];

     public function jadwalMatakuliah(){
    	return $this->hasMany(JadwalMatakuliah::class);
    }

}
