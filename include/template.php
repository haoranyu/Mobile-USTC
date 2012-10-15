<?php
if(isset($_GET['model'])){
	$model = $_GET['model'];
}
else{
	$model = "index";
}
switch($model){
	case "index":include("template/index.php");break;
	case "android":include("template/android.php");break;
	case "ios":include("template/ios.php");break;
	case "wp":include("template/wp.php");break;
}
?>