<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use Caffeinated\Modules\Facades\Module;

class ModuleController extends Controller
{
    /**
     * Returns all modules
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return Module::all();
    }
    
    /**
     * Returns all enabled modules
     *
     * @return \Illuminate\Http\Response
     */
    public function enabled()
    {
        return Module::enabled();
    }    
    
    /**
     * Returns all disabled modules
     *
     * @return \Illuminate\Http\Response
     */
    public function disabled()
    {
        return Module::disabled();
    } 
    
    /**
     * Checks if a module exists.
     * 
     * @param  $slug
     * @return \Illuminate\Http\Response
     */
    public function exists($slug) 
    {
        return response()->json([$slug => Module::exists($slug)]);
    }
    
    /**
     * Enable a module from its slug.
     *
     * @param  $slug
     * @return \Illuminate\Http\Response
     */
    public function enable($slug) 
    {
        return response()->json([$slug => Module::enable($slug)]);
    }
    
    /**
     * Disable a module from its slug.
     *
     * @param  $slug
     * @return \Illuminate\Http\Response
     */
    public function disable($slug) 
    {
        return response()->json([$slug => Module::disable($slug)]);
    }
    
    /**
     * Check if a module is enabled.
     *
     * @param  $slug
     * @return \Illuminate\Http\Response
     */
    public function isEnabled($slug) 
    {
        return response()->json([$slug => Module::isEnabled($slug)]);
    }
    
    /**
     * Check if a module is disabled.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function isDisabled($slug) 
    {
        return response()->json([$slug => Module::isDisabled($slug)]);
    }     
}
