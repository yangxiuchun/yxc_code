<html class=" js csstransitions"><head>
<meta http-equiv="X-UA-Compatible" content="IE=10;IE=9;IE=8;IE=7;IE=EDGE">
<!-- <script id="allmobilize" charset="utf-8" src="${rbase}/js/third/allmobilize.min.js"></script> -->
<script charset="utf-8" src="http://trust.baidu.com/vcard/v.js?siteid=4899764&amp;url=http%3A%2F%2Fwww.lagou.com%2F&amp;source=&amp;rnd=481657153"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="http://conv.youdao.com/pub/conversion.js"></script><script id="allmobilize" charset="utf-8" src="http://a.yunshipei.com/ef48a3377914af6ef846830fcae2a8e6/allmobilize.min.js"></script><style type="text/css"></style>

<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="alternate" media="handheld" href="#">
<!-- end 云适配 -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>@yield('title')</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="kk投票网，专注于收集网络民意，发起网络投票，最专业的网络调查平台" name="description">
<meta content="网络投票，调查，新建投票，民意表达，民意收集" name="keywords">

<script type="text/javascript">
</script><link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="/static/css/style.css"/>
<script src="/static/js/libs/jquery.1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/static/js/libs/jquery.lib.min.js"></script>
<script type="text/javascript" src="/static/js/core.min.js"></script>
<script type="text/javascript">
</script> 
</head>
<body>
<div id="body">
    @include('comm.header')
    <div id="container">
        @yield('content')
    </div><!-- end #container -->
</div><!-- end #body -->
@include('comm.footer')

<script type="text/javascript">
$(function(){
	//判断初始化页面时 是否隐藏提示框以及红点的显示
	if($(".notice_tip").length == 0){
		$("#noticeTip").hide();
		$(".collapsible_menu dt .red").addClass("dn");
	}
	
	//$('#noticeDot-1').hide();
	$('#noticeTip a.closeNT').click(function(){
		$(this).parent().hide();
		
				$(".collapsible_menu dt .red").addClass("dn");
	});
	//B端消息绑定单击事件
	});
</script>
</body></html>