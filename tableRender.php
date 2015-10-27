<?php 
$fp=fopen("./public/table.html","r");
$str=fread($fp,filesize("./public/table.html"));
$str=str_replace("{title}", 'test',$str);
fclose($fp);

$path='group'.rand(1000, 9999).'.html';
$handle=fopen("./".$path,"w");
fwrite($handle,$str);
echo "<font color='red'>正在生成</font>";
echo "$path";
fclose($handle);