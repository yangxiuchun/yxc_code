@extends('layouts.main')
@section('title')分类页-kk投票-专注于收集网络民意@stop
@section('content')
@include('comm.slider')	
<div class="content">	
    @include('comm.search')
    @include('comm.list')
    <?php echo $votes->appends(array('c_type' => $c_type))->links(); ?>
    <div class="clear"></div>
</div>
@stop
