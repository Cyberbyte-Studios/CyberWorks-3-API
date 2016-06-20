<?php

namespace App\Models\Life;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = array('pos', 'inventory', 'containers');
    public $timestamps = false;
    
    public function player() {
        return $this->belongsTo('App\Models\Life\Player', 'pid', 'playerid');
    }
}
