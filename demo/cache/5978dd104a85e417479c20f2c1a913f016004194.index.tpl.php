<?php
/*%%SmartyHeaderCode:1032648088562ee9b7d9d442_28926038%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5978dd104a85e417479c20f2c1a913f016004194' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tableRender/demo/templates/index.tpl',
      1 => 1445915009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1032648088562ee9b7d9d442_28926038',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.27',
  'unifunc' => 'content_562ee9b7dc61a1_53010604',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562ee9b7dc61a1_53010604')) {
function content_562ee9b7dc61a1_53010604 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- <meta charset="GBK" /> -->
    <link rel="stylesheet" type="text/css" href="./common/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="table.css"/>
</head>
<body>
    <h3 id="title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
    <table id="example" class="display">
    </table>
    <script type="text/javascript" src="./common/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="./common/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="table.js"></script>
</body>
</html><?php }
}
?>