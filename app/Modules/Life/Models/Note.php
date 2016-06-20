<?php

namespace App\Modules\Life\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use SoftDeletes;
    
    protected $fillable = array('user_id', 'player_id', 'title', 'message');
    protected $dates = ['deleted_at'];
    
    public function player() {
        return $this->belongsTo('App\Modules\Life\Models\Player');
    }
    
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
