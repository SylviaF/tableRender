<?php
require '../libs/Smarty.class.php';
$smarty = new Smarty;

$file = $_FILES["file"];
$newname=$file["name"];
$filepath="../upload/".$newname;
$state = 0;
//判断是否post上传
if(is_uploaded_file($file['tmp_name'])){
  	//若是则则把缓存中的移到指定的文件下
    if(move_uploaded_file($file['tmp_name'],$filepath)){
		$state = 1;
    }else{
		$state = 2;
	}
  }
$pageData = array(
	'state' => $state,
	'link' => "/demo/index.php?filename=".$newname,
);
$smarty->assign($pageData);
$smarty->display('input.tpl');
?>