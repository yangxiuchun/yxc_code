<div id="hotList">
  <ul class="hot_pos latest_posHotPosition reset" style="display: block;">
    @foreach($votes as $key=>$vote)
        @if($key%2==0)<li class="odd clearfix">@else<li class="clearfix">
        @endif
            	<div class="mb10">
                    <a href="" target="_blank">{{$vote->title}}</a> 
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
  </ul>
</div>