<div id="search_box">
	<form id="searchForm" name="searchForm" action="http://www.lagou.com/jobs/list_" method="get">
        <input type="text" id="search_input" name="kd" tabindex="1" value="" placeholder="" class="ui-autocomplete-input" autocomplete="off">
        <input type="hidden" name="spc" id="spcInput" value="">
        <input type="hidden" name="pl" id="plInput" value="">
        <input type="hidden" name="gj" id="gjInput" value="">
        <input type="hidden" name="xl" id="xlInput" value="">
        <input type="hidden" name="yx" id="yxInput" value="">
        <input type="hidden" name="gx" id="gxInput" value="">
        <input type="hidden" name="st" id="stInput" value="">
        <input type="hidden" name="labelWords" id="labelWords" value="">
        <input type="hidden" name="lc" id="lc" value="">
        <input type="hidden" name="workAddress" id="workAddress" value="">
        <input type="hidden" name="city" id="cityInput" value="">
        <input type="hidden" name="requestId" id="requestId" value="">
        <input type="submit" id="search_button" value="搜索">
    </form>
    <input type="hidden" id="search_py" value="">
    <input type="hidden" id="isIndex" value="true">
</div>
<style>
.ui-autocomplete{width:488px;background:#fafafa !important;position: relative;z-index:10;border: 2px solid #91cebe;}
.ui-autocomplete-category{font-size:16px;color:#999;width:50px;position: absolute;z-index:11; right: 0px;/*top: 6px; */text-align:center;border-top: 1px dashed #e5e5e5;padding:5px 0;}
.ui-menu-item{ *width:439px;vertical-align: middle;position: relative;margin: 0px;margin-right: 50px !important;background:#fff;border-right: 1px dashed #ededed;}
.ui-menu-item a{display:block;overflow:hidden;}
</style>
<dl class="hotSearch">
    <dt>热门搜索：</dt>
    @foreach($hot_keys as $key)
    <dd><a href="http://www.lagou.com/search?keyword={{$key}}">{{$key}}</a></dd>
    @endforeach
</dl>
