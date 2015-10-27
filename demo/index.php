<?php
require '../libs/Smarty.class.php';
require 'tableData.php';
define("PATH", dirname(__FILE__)."/");

$smarty = new Smarty;

//$smarty->force_compile = true;
// $smarty->debugging = true;
// $smarty->caching = true;
// $smarty->cache_lifetime = 120;
$allData = getTableData();
$pageData = array(
	"allData" => $allData
);
$smarty->assign($pageData);
$smarty->display('index.tpl');
