@extends('layouts.main')
@section('title')搜索-kk投票-专注于收集网络民意@stop
@section('content')
@include('comm.slider')	
<div class="content">	
    @include('comm.search')
    @include('comm.list')
    @include('comm.page')
    <div class="clear"></div>
</div>
@stop
