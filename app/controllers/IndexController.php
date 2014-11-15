<?php

class IndexController extends BaseController {

    protected $layout = 'layouts.main';
    
    
    /**
     * Ê×Ò³
     */
	public function Index()
	{
	   $hot_keys = Pos::where('name', '=', 'hot_search')->lists('info');
       $out['hot_keys'] = explode(',',$hot_keys[0]); 
       $out['banners'] = DB::table('kk_banners')->get();
       $hot_votes = Pos::where('name', '=', 'hot_list')->lists('info');
       $out['votes'] = DB::table('kk_vote')->whereIn('vid', explode(',',$hot_votes[0]))->get();
	   return  View::make('home.index')->with($out);
	}

  
  
    
    
    
    
    
    

}
