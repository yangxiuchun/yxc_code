@extends('layouts.main')
@section('title')kk投票--专注于收集网络民意@stop
@section('content')
@include('comm.slider')				
<div class="content">	
    @include('home.search')
    <script type="text/javascript" src="http://www.lagou.com/js/search/search.min.js?v=1.5.5.6_1022"></script>			
    @include('home.banner')
    <ul class="reset hotabbing">
        <li class="current">热门职位</li>
    	<li>最新职位</li>
    </ul>
    @include('home.hotlist')
    <div class="clear"></div>
    @include('home.flink')
    <input type="hidden" value="" name="userid" id="userid">
    <div class="clear"></div>
    <input type="hidden" id="resubmitToken" value="">
    <a id="backtop" title="回到顶部" rel="nofollow" style=""></a>
</div>
@stop
