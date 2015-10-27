<?php
require '../libs/Smarty.class.php';
$smarty = new Smarty;

//$smarty->force_compile = true;
// $smarty->debugging = true;
// $smarty->caching = true;
// $smarty->cache_lifetime = 120;
// $allData = getTableData();
// $pageData = array(
// 	"allData" => $allData
// );
$smarty->assign(array('state'=> 0));
$smarty->display('input.tpl');
