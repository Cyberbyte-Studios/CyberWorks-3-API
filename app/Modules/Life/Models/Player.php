<?php

namespace App\Modules\Life\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model {
    protected $fillable = array('name', 'cash', 'bankacc', 'coplevel', 'cop_licenses', 'civ_licenses', 'med_licenses', 'cop_gear', 'med_gear', 'mediclevel', 'aliases', 'adminlevel', 'donatorlvl', 'civ_gear', 'blacklist');
    protected $primaryKey = 'uid';
    public $timestamps = false;
    
    public function vehicles() {
        return $this->hasMany('App\Modules\Life\Models\Vehicle','pid','playerid');
    }
    
    public function houses() {
        return $this->hasMany('App\Modules\Life\Models\House','pid','playerid');
    }
    
    public function gang() {
        return $this->hasOne('App\Modules\Life\Models\Gang');
    }
    
    public function notes() {
        return $this->hasMany('App\Modules\Life\Models\Note');
    }
}