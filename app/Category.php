<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name','slug','image'];

    public function projects(){
        return $this->hasMany('App\Project');
    }
}
