<?php

class VoteController extends BaseController {

    protected $layout = 'layouts.main';

    
    /**
     * 获取热门投票
     */
	public function getHot()
	{
		
	}
    /**
     * 新增一个投票
     */
    public function postAdd()
    {
        
        
    }
    /**
     * 获取一个投票详情
     */
    public function getDetails()
    {

    }
    
    public function votelist()
    {
        return  View::make('addvote.index');
        
    }
    public function addview()
    {
        return  View::make('myvote.index');
        
    }
    public function getSearch()
    {
        
        
    }


}
