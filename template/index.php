<!DOCTYPE html>
<!--STATUS OK-->
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="IE=7" http-equiv="X-UA-Compatible"/>
<title><?php p($site['name'].' - '.$site['subname'])?></title>
<meta content="<?php p($site['description'])?>" name="Description"/>
<meta content="<?php p($site['keyword'])?>" name="Keywords"/>
<?php style('main')?>
</head>
<body>
<?php template('header')?>
<?php template('menu')?>
<div id="main">
	<div class="list">
	<ul>
		<?php foreach($apps as $app){?>
			<li id="<?php $idx = explode('.',$app['icon']);p($idx[0]);?>" <?php if(c($app['ios'],false)){p('ios="1"');}else{p('ios="0"');}?> <?php if(c($app['android'],false)){p('android="1"');}else{p('android="0"');}?> <?php if(c($app['wp'],false)){p('wp="1"');}else{p('wp="0"');}?>>
			<div class="icon" style="background:url(img/icon/<?php p($app['icon'])?>)">
				<a href="<?php p($app['url'])?>" class="titlinx"></a>
			</div>
			<div class="tit f14 b"><a href="<?php p($app['url'])?>" class="titlink"><?php p($app['name'])?></a></div>
			<div class="desc f12"><?php p($app['description'])?></div>
			<div class="device">
				<?php if(c($app['ios'],false)){?>
				<a href="<?php p($app['ios'])?>" class="ios"></a>
				<?php }?>
				<?php if(c($app['android'],false)){?>
				<a href="<?php p($app['android'])?>" class="android"></a>
				<?php }?>
				<?php if(c($app['wp'],false)){?>
				<a href="<?php p($app['wp'])?>" class="wp"></a>
				<?php }?>
			</div>
			</li>
		<?php }?>
	</ul>
	</div>
</div>
<?php template('footer')?>
<?php js('jquery.min')?>
<script type="text/javascript">
$("[uc='tab']").click(function(){
	$("[uc='tab']").removeClass().addClass("b");
	$(this).removeClass().addClass("b current");
	var phone = $(this).attr("phone");
	if(phone==0){
		$(".list li").show();
		$(".device").show();
		$(".list li").css('height','115px');
	}
	else{
		$("["+phone+"='0']").hide();
		$("["+phone+"='1']").show();
		$(".device").hide();
		$(".list li").css('height','100px');
		for(i=0;i<=$("["+phone+"='1'] ."+phone+"").length;i++){
			$("["+phone+"='1'] .titlink:eq("+(i-1)+")").attr("href",$("["+phone+"='1'] ."+phone+":eq("+(i-1)+")").attr("href"));
			$("["+phone+"='1'] .titlinx:eq("+(i-1)+")").attr("href",$("["+phone+"='1'] ."+phone+":eq("+(i-1)+")").attr("href"));
		}
	}
});
<?php if(isset($_GET['an'])){?>
$("#antab").trigger("click");
<?php }?>
<?php if(isset($_GET['ios'])){?>
$("#iostab").trigger("click");
<?php }?>
<?php if(isset($_GET['wp'])){?>
$("#wptab").trigger("click");
<?php }?>
</script>
</body>
</html>