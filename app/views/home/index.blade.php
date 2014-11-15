@extends('layouts.main')
@section('title')kk投票--专注于收集网络民意@stop
@section('content')
@include('comm.slider')				
<div class="content">	
    @include('comm.search')
    @include('home.banner')
    <ul class="reset hotabbing">
        <li class="current">热门调查</li>
    	<li>最新调查</li>
    </ul>
    @include('home.hotlist')
    <div class="clear"></div>
    @include('home.flink')
    <div class="clear"></div>
    <a id="backtop" title="回到顶部" rel="nofollow" style=""></a>
</div>
@stop
