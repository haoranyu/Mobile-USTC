<?php
include 'core.php';
include 'function.php';
if(isset($_GET['model'])){
	$model = $_GET['model'];
}
else{
	$model = "index";
}
switch($model){
	case "index":include("model/index.php");break;
	case "android":include("model/android.php");break;
	case "ios":include("model/ios.php");break;
	case "wp":include("model/wp.php");break;
}
?>