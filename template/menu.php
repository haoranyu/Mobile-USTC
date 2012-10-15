<?php
if(isset($_GET['tab'])){
	$tab = $_GET['tab'];
}
else{
	$tab = 0;
}
?>
<div id="menu" class="f14">
	<div class="inner">
	<ul>
	<?php if(!isset($_GET['model'])){?>
	<li uc="tab" phone="0" class="b current">首页</li>
	<li uc="tab" phone="android" id="antab" class="b">Android</li>
	<li uc="tab" phone="ios" id="iostab" class="b">iPhone</li>
	<li uc="tab" phone="wp" id="wptab" class="b">Windows Phone</li>
	<?php }else{?>
	<li uc="tab" phone="0" class="b" ><a href="<?php p(webhost)?>">首页</a></li>
	<li uc="tab" phone="android" class="b <?php if(isset($_GET['model'])&&$_GET['model']=='android'){ p('current');}?>"><a href="<?php p(webhost)?>?an">Android</a></li>
	<li uc="tab" phone="ios" class="b <?php if(isset($_GET['model'])&&$_GET['model']=='ios'){ p('current');}?>"><a href="<?php p(webhost)?>?ios">iPhone</a></li>
	<li uc="tab" phone="wp" class="b <?php if(isset($_GET['model'])&&$_GET['model']=='wp'){ p('current');}?>"><a href="<?php p(webhost)?>?wp">Windows Phone</a></li>
	<?php }?>
	</ul>
	<div class="social">
	<span><iframe scrolling="no" frameborder="0" allowtransparency="true" src="http://widget.renren.com/plugin/followbutton?page_id=601380996&color=0&model=1" style="width:135px;height:24px;" ></iframe></span>
	<span><iframe width="136" height="24" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" scrolling="no" border="0" src="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&width=136&height=24&uid=2795905884&style=2&btn=light&dpc=1"></iframe></span>
	</div>
	</div>
</div>
