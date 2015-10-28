<?php

function getTableData(){
	$file_name = './upload/'.$_GET['filename'];
	$file = fopen($file_name, 'r');
	$oneFlag = true;
	$n = 0;
	while ($data = fgets($file)) { //每次读取CSV里面的一行内容
		// print_r($data.'\n');
		// echo preg_match($regExp, trim($data));
		if (preg_match("/^\,+$/", trim($data))){
			$n = 0;
			$oneFlag = false;
			if (!empty($tableData)){
				$allData[] = $tableData;
			}
			$tableData = array();
		}
		else{
			$data = preg_replace("/\,+$/", '', trim($data));
			if ($n == 0){
				$tableData['title'] = str_getcsv($data, ",")[0];
			}
			else if ($n == 1){
				$dataCount = substr_count($data, ',');
				$columns = str_getcsv($data, ",");
				foreach ($columns as $key => $col) {
					$tableData['columns'][] = array('title'=> $col);
				}
			}
			else {
				$endEmptyCount = $dataCount  - substr_count($data, ',');
				if ($dataCount){
					while($endEmptyCount){
						$data = $data.',';
						$endEmptyCount--;
					}
				}
				$tableData['data'][] = str_getcsv($data, ",");
			}
			$n++;
		}
	}
	$allData[] = $tableData;
	// var_dump($allData);
	return $allData;
}

?>