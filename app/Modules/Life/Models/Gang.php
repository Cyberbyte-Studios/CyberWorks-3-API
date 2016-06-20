<?php

namespace App\Modules\Life\Models;

use Illuminate\Database\Eloquent\Model;

class Gang extends Model
{
    protected $fillable = array('owner', 'name', 'members', 'maxmembers', 'bank', 'active');
    public $timestamps = false;
    
    public function player() {
        return $this->belongsTo('App\Modules\Life\Models\Player', 'owner', 'playerid');
    }
}