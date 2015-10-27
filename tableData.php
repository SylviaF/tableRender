<?php
header('Content-type:text/json');

$file_name = 'upload/'.$_GET['filename'];
$file = fopen($file_name, 'r');
// 读取txt
// $data = fread($file, filesize($file_name));
// print (trim($data));

// 读取csv
$n = 0;
while ($data = fgets($file)) { //每次读取CSV里面的一行内容
	if ($n == 0){
		$tmpcsv['title'][] = str_getcsv($data, ",")[0];
	}
	else if ($n == 1){
		$columns = str_getcsv($data, ",");
		foreach ($columns as $key => $col) {
			$tmpcsv['columns'][] = array('title'=> $col);
		}
	}
	else {
		$tmpcsv['data'][] = str_getcsv($data, ",");
	}
	$n++;
}
// str_replace('\n|\r', ';', $data);
// foreach ($tmp[0] as $key => $line) {、
// 	$tableData[] = explode(';', $line);
// }
// echo $tmp[0];
$tmp =json_encode($tmpcsv, JSON_UNESCAPED_UNICODE);
// var_dump($tmp);
echo json_decode(json_encode($tmp));
fclose($file);
?>