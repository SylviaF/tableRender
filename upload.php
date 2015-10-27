<?php
$file = $_FILES["file"];
$newname=$file["name"];
$filepath="upload/".$newname;
//判断是否post上传
if(is_uploaded_file($file['tmp_name'])){
  	//若是则则把缓存中的移到指定的文件下
    if(move_uploaded_file($file['tmp_name'],$filepath)){
    	header("Location: /public/table.html?filename=".$newname);
		echo "success";
    }else{
		echo "faile";
	}
  }
?>