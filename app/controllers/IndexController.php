<?php

class IndexController extends BaseController {

    
    public function __construct()
    {
                
        
    }
    
    
    /**
     * Ê×Ò³
     */
	public function getIndex()
	{
	   $hot_keys = DB::table('kk_hot_search')->lists('name');
	   return  View::make('index')->with('hot_keys', $hot_keys);
	}



}
