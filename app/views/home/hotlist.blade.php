<div id="hotList">
    <ul class="hot_pos hot_posHotPosition reset" style="display: block;">
    @foreach($votes as $key=>$vote)
        @if($key%2==0)<li class="odd clearfix">@else<li class="clearfix">
        @endif
            	<div class="mb10">
                    <a href="/details?vid={{$vote->vid}}" target="_blank">{{$vote->title}}</a> 
                </div>
        	<div class="hot_pos_l">
                <?php  $options = json_decode($vote->option_info); ?>
                    @foreach($options as $k1=>$option)
                    <div><input type="radio" name="{{$k1}}">{{$option}}</div>
                    @endforeach
                <input type="submit" id="vote_button" value="投票">
                <br>
                <!-- <a href="#" class="wb">分享到微博</a> -->
            </div>
        	<div class="hot_pos_r">
                <?php  $percents = json_decode($vote->result_info);
                       $counts = json_decode($vote->result_count); 
                       $percents = is_array($percents)?$percents:array();?>
                @foreach($percents as $k2=>$percent)
                <div class="bars">
                        <div class="bar"><div class="precent" precent="{{$percent}}" style="width: {{$percent}};"></div></div>
                        <div class="data cf29">{{$percent}}&nbsp;&nbsp;{{(int)$counts[$k2]}}票</div>
                </div>
                @endforeach            
		      </div>
		</li>
    @endforeach
	   <a href="http://www.lagou.com/zhaopin/" class="btn fr" target="_blank">查看更多</a>
  </ul>
  
  <ul class="hot_pos latest_posHotPosition reset" style="display: none;">
   	    <li class="clearfix">
            	<div class="mb10">
                    <a href="http://www.lagou.com/jobs/301705.html?source=home_hot" target="_blank">C#工程师查看更查看更查看更查看更查看更查看更查看更</a> 
                </div>
        	<div class="hot_pos_l">
                    <div><input type="radio" name="sdsadsa">messisssssssssssssssssssssssssssssss</div>
                    <div><input type="radio" name="sdsadsa">messi</div>
                    <div><input type="radio" name="sdsadsa">messi</div>
                <input type="submit" id="vote_button" value="投票">
                <br>
                <!-- <a href="#" class="wb">分享到微博</a> -->
            </div>
        	<div class="hot_pos_r">
                <div class="bars">
                        <div class="bar"><div class="precent" precent="86.6%" style="width: 86.6%;"></div></div>
                        <div class="data cf29">86.6%&nbsp;&nbsp;3,456票</div>
                </div>
                <div class="bars">
                        <div class="bar"><div class="precent" precent="86.6%" style="width: 86.6%;"></div></div>
                        <div class="data cf29">86.6%&nbsp;&nbsp;3,456票</div>
                </div>
                <div class="bars">
                        <div class="bar"><div class="precent" precent="86.6%" style="width: 86.6%;"></div></div>
                        <div class="data cf29">86.6%&nbsp;&nbsp;3,456票</div>
                </div>                
		      </div>
		</li>
	    <li class="odd clearfix">
		    <div class="hot_pos_l">
	           <div class="mb10">
                    <a href="http://www.lagou.com/jobs/295714.html?source=home_hot" target="_blank">新媒体运营</a> 
				         &nbsp;
                    <span class="c9">[广州]</span>
                </div>
                <span><em class="c7">月薪： </em>5k-10k</span>
                <span><em class="c7">经验：</em> 不限</span>
                <span><em class="c7">最低学历： </em>大专</span>
                <br>
                <span><em class="c7">职位诱惑：</em>双休 年底双薪 五险 带薪年假</span>
                <br>
                <span>2天前发布</span>
                <!-- <a href="#" class="wb">分享到微博</a> -->
            </div>
        	<div class="hot_pos_r">
            	<div class="mb10 recompany"><a href="http://www.lagou.com/gongsi/13519.html" target="_blank">向日葵保险网</a></div>
                <span><em class="c7">领域：</em> O2O,金融互联网</span>
                <span><em class="c7">创始人：</em>王家新 Michael</span>
                <br>
                <span><em class="c7">阶段：</em> 初创型(天使轮)</span>
                <span><em class="c7">规模：</em>150-500人</span>
                <ul class="companyTags reset">
        			<li>年底双薪</li>
        			<li>岗位晋升</li>
        			<li>扁平管理</li>
               </ul>
           </div>
		</li>
	   <a href="http://www.lagou.com/zhaopin/" class="btn fr" target="_blank">查看更多</a>
  </ul>
</div>