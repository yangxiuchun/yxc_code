<div id="home_banner">
    <ul class="banner_bg" style="height: 480px; margin-top: -160px;">
        @foreach($banners as $one)
    	<li class="banner_bg_1 current">
            <a href="{{$one->link}}" target="_blank"><img src="{{$one->pic}}" width="612" height="160" alt="{{$one->alt}}"></a>
        </li>
        @endforeach
    </ul>
    <div class="banner_control">
        <em style="top: 55px;"></em> 
        <ul class="thumbs">
            @foreach($banners as $one)
        	 <li class="thumbs_1">
                <i></i>
                <img src="{{$one->mpic}}" width="113" height="42">
            </li>
            @endforeach
         </ul>
    </div>
</div>