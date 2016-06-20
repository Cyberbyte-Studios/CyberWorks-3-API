<?php

namespace App\Modules\Life\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model {
    protected $fillable = array('pos', 'inventory', 'containers');
    public $timestamps = false;
    
    public function player() {
        return $this->belongsTo('App\Modules\Life\Models\Player', 'pid', 'playerid');
    }
}
