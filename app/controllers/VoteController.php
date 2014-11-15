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
    public function details()
    {
        $vid = Input::get('vid');
        $vote = DB::table('kk_vote')->where('vid', '=', $vid)->get();
        return  View::make('details.index')->with('vote',$vote[0]);
    }
    
    public function votelist()
    {
        return  View::make('addvote.index');
        
    }
    public function addview()
    {
        return  View::make('myvote.index');
        
    }
    public function typelist()
    {
	   $keys = Pos::where('name', '=', 'hot_search')->lists('info');
       $hot_keys= explode(',',$keys[0]); 
       $type = Input::get('c_type');
       $votes = Vote::where('c_type', '=', $type)->paginate(10);
       $result = array('hot_keys'=>$hot_keys,'c_type'=>$type,'votes'=>$votes);
	   return  View::make('type.index')->with($result);
        
    }
    public function update()
    {
        $votes = DB::select('select vid from kk_vote order by total desc limit 10');
        echo json_encode($votes);die();
        //$votes = Vote::where('result_count', '!=', 'null')->select(array('vid','result_count'));
        foreach($votes as $one){
            $counts = json_decode($one->result_count);
             $sum = is_array($counts)?array_sum($counts):0;
            DB::update('update kk_vote set total = ? where vid = ?', array($sum,$one->vid));
        }
        
    }


}
