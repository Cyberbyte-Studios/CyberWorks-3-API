<?php

namespace App\Modules\Life\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = array('alive', 'active', 'color', 'inventory');
    public $timestamps = false;
    
    public function player() {
        return $this->belongsTo('App\Modules\Life\Models\Player', 'pid', 'playerid');
    }
}