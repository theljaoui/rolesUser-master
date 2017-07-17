<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $fillable = ['name', 'display_name', 'description'];

    //belongsToMany users

    public function users() {
        return $this->belongsToMany('App\User');
    }

    //belongsToMany permission

    public function permissions() {
        return $this->belongsToMany('App\Permission');
    }


}
