<?php

class SearchController extends BaseController {

    protected $layout = 'layouts.main';
    
    
    /**
     * ��ҳ
     */
	public function Index()
	{
	   $hot_keys = DB::table('kk_hot_search')->lists('name');
	   return  View::make('search.index')->with('hot_keys', $hot_keys);
	}



}
