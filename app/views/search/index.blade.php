@extends('layouts.main')
@section('title')搜索-kk投票-专注于收集网络民意@stop
@section('content')
@include('comm.slider')	
<div class="content">	
    @include('search.search')
    @include('search.list')
    <div class="clear"></div>
    <input type="hidden" id="resubmitToken" value="">
    <a id="backtop" title="回到顶部" rel="nofollow" style=""></a>
</div>
@stop
