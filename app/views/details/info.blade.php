<div class="clearfix">
            <div class="content_l">
            	 <dl class="job_detail">
                    <dd class="job_request">
                       	<span>{{$vote->title}}</span>
                      	<div>调查背景：{{$vote->background}}</div>  
                      	<div>发布时间：{{date('Y-m-d',$vote->create_time)}}</div>
                    </dd>
                    <dd class="job_bt">
                        <?php  $options = json_decode($vote->option_info); ?>
                            @foreach($options as $k1=>$option)
                            <div><input type="radio" name="{{$k1}}">{{$option}}</div>
                            @endforeach
                        <input type="submit" id="vote_button" value="投票">
                    </dd>                  
                </dl>
                                <div id="weibolist"></div>
            </div>	
            <div class="content_r">
                <dl class="job_company">
                 <!-- write by Darren  -->
                <div id="position_recommend">
                   <ul class="position_head">
                      <li class="guess_selected">相似调查</li>
                      <li>猜你喜欢</li>
                   </ul>
                   <div class="similar_content">
                      <div class="position_detail_content">
                                                  <dl>
		                     <dt><a href="http://www.lagou.com/gongsi/6822.html?source=position_rec" title="e袋洗" target="_blank"><img src="http://www.lagou.com/upload/logo/08deb7d88dbd4191a15a00b86aeed679.jpg" alt="e袋洗" width="54" height="54"></a></dt>
		                     <dd class="content_inner">
		                        <a href="http://www.lagou.com/jobs/263836.html?source=position_rec" target="_blank">
			                        <h2 title="用户运营">用户运营</h2>
			                        <span>8k-12k</span>
			                        			                        <p title="e袋洗">e袋洗</p>
			                        		                        </a>
                             </dd>
                         </dl>
                                                  <dl>
		                     <dt><a href="http://www.lagou.com/gongsi/21977.html?source=position_rec" title="生命人寿北京分公司海淀科技保险" target="_blank"><img src="http://www.lagou.com/upload/logo/d356014950f34732a30d823ca04ddbab.png" alt="生命人寿北京分公司海淀科技保险" width="54" height="54"></a></dt>
		                     <dd class="content_inner">
		                        <a href="http://www.lagou.com/jobs/139162.html?source=position_rec" target="_blank">
			                        <h2 title="用户运营">用户运营</h2>
			                        <span>6k-10k</span>
			                        			                        <p title="生命人寿北京分公司海淀科技保险">生命人寿北京分公司海淀科技保险</p>
			                        		                        </a>
                             </dd>
                         </dl>
                                                  <dl>
		                     <dt><a href="http://www.lagou.com/gongsi/18657.html?source=position_rec" title="tvm" target="_blank"><img src="http://www.lagou.com/upload/logo/ff80808145fdcbfc0145ff0058bf02b0.png" alt="tvm" width="54" height="54"></a></dt>
		                     <dd class="content_inner">
		                        <a href="http://www.lagou.com/jobs/296209.html?source=position_rec" target="_blank">
			                        <h2 title="用户运营">用户运营</h2>
			                        <span>5k-10k</span>
			                        			                        <p title="tvm">tvm</p>
			                        		                        </a>
                             </dd>
                         </dl>
                                                  <dl>
		                     <dt><a href="http://www.lagou.com/gongsi/33227.html?source=position_rec" title="中广闪动" target="_blank"><img src="http://www.lagou.com/upload/logo/eb778b04dbf146f698c6576485aea01b.jpg" alt="中广闪动" width="54" height="54"></a></dt>
		                     <dd class="content_inner">
		                        <a href="http://www.lagou.com/jobs/215180.html?source=position_rec" target="_blank">
			                        <h2 title="用户运营">用户运营</h2>
			                        <span>5k-10k</span>
			                        			                        <p title="中广闪动">中广闪动</p>
			                        		                        </a>
                             </dd>
                         </dl>
                                                  <dl>
		                     <dt><a href="http://www.lagou.com/gongsi/5576.html?source=position_rec" title="中瑞资本" target="_blank"><img src="http://www.lagou.com/images/logo_default.png" alt="中瑞资本" width="54" height="54"></a></dt>
		                     <dd class="content_inner">
		                        <a href="http://www.lagou.com/jobs/281974.html?source=position_rec" target="_blank">
			                        <h2 title="用户运营">用户运营</h2>
			                        <span>8k-15k</span>
			                        			                        <p title="中瑞资本">中瑞资本</p>
			                        		                        </a>
                             </dd>
                         </dl>
                                                  <a href="http://www.lagou.com/jobs/list_%E7%94%A8%E6%88%B7%E8%BF%90%E8%90%A5?kd=%E7%94%A8%E6%88%B7%E8%BF%90%E8%90%A5&amp;spc=1&amp;pl=&amp;gj=1-3年&amp;xl=&amp;yx=&amp;gx=&amp;st=&amp;labelWords=&amp;lc=&amp;workAddress=&amp;city=北京" class="similar_position_footer" target="_blank" id="similar_footer">查看更多相似职位</a>
                       </div>
                   </div>
                                      <div id="guess">
	                   <div class="guess_like">
	                   		                   <p>暂时没有匹配的职位</p>
		                   <p class="special_fix">不妨调整你的期望工作试一试</p>
		                   <p><a href="http://www.lagou.com/resume/myresume.html#expectJob" title="前去修改" target="_blank" class="guess_rectangle">前去修改</a></p>
		                   	                   </div>
                   </div>
                                   </div>
               <!--  End -->
				<!-- 广告位：主站--职位详情页 -->
                <script type="text/javascript">BAIDU_CLB_SLOT_ID = "946156";</script>
                <script type="text/javascript" src="http://cbjs.baidu.com/js/o.js"></script><div id="BAIDU_DUP_wrapper_946156_0"></div><script charset="utf-8" src="http://cb.baidu.com/ecom?di=946156&amp;dcb=BAIDU_DUP_define&amp;dtm=BAIDU_DUP2_SETJSONADSLOT&amp;dbv=2&amp;dci=0&amp;dri=0&amp;dis=0&amp;dai=1&amp;dds=&amp;drs=1&amp;dvi=1410832926&amp;ltu=http%3A%2F%2Fwww.lagou.com%2Fjobs%2F307574.html%3Fsource%3Dhome_hot&amp;liu=&amp;ltr=http%3A%2F%2Fwww.lagou.com%2F&amp;lcr=&amp;ps=1190x906&amp;psr=1366x768&amp;par=1366x728&amp;pcs=1349x643&amp;pss=1349x1296&amp;pis=-1x-1&amp;cfv=15&amp;ccd=24&amp;chi=1&amp;cja=true&amp;cpl=32&amp;cmi=38&amp;cce=true&amp;col=zh-CN&amp;cec=UTF-8&amp;cdo=-1&amp;tsr=12&amp;tlm=1416054794&amp;tcn=1416054794&amp;tpr=1416054794185&amp;dpt=none&amp;coa=&amp;baidu_id="></script><script charset="utf-8" src="http://dup.baidustatic.com/painter/clb/fixed7o.js"></script>
            </div><!--end #myRecommend-->
      </div>