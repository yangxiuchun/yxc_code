<?php

class VoteController extends BaseController {

    protected $layout = 'layouts.main';

    
    /**
     * ��ȡ����ͶƱ
     */
	public function getHot()
	{
		
	}
    /**
     * ����һ��ͶƱ
     */
    public function postAdd()
    {
        
        
    }
    /**
     * ��ȡһ��ͶƱ����
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
