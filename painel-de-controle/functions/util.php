<?php 

function pageRedirects($path){
	echo "<script>location.href='{$path}';</script>";
}

function alert($text='Alert') {
	echo "<script>alert('$text')</script>";
}

