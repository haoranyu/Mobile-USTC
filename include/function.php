<?php
function template($file_name){
	include 'template/'.$file_name.'.php';
}
function style($file_name){
	echo '<link href="'.webhost.'css/'.$file_name.'.css" rel="stylesheet" type="text/css" />';
}
function js($file_name){
	echo '<script type="text/javascript" src="'.webhost.'js/'.$file_name.'.js"></script>';
}
function c($a,$b){
	return $a==$b?false:true;
}
function p($a){
	echo $a;
}
?>