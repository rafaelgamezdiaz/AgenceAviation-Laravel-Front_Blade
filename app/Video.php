<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $fillable = ['project_id', 'url'];

    public function project() {
        return $this->belongsTo('App\Project');
    }
}
