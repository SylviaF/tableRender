<?php /* Smarty version 3.1.27, created on 2015-10-27 09:38:03
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tableRender/demo/templates/input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:321047252562f37ebb5e856_98372363%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b13dd954dcc50d0d90615c3f38c5974a4471ceb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tableRender/demo/templates/input.tpl',
      1 => 1445935079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321047252562f37ebb5e856_98372363',
  'variables' => 
  array (
    'state' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562f37ebb81dc1_13624756',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562f37ebb81dc1_13624756')) {
function content_562f37ebb81dc1_13624756 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '321047252562f37ebb5e856_98372363';
?>
<!DOCTYPE html>
<html>
<head>
    <title>csv转在线表格</title>
</head>
<body>
	<form action="/demo/upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file" />
		<input type="submit"/>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['state']->value == 1) {?>
		<p>success:链接地址如下</p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
">点击这里</a>
	<?php } elseif ($_smarty_tpl->tpl_vars['state']->value == 2) {?>
		<p>fail：请仔细查看注意事项，再试一次</p>
	<?php }?>
	<div>
		<h3>注意事项：</h3>
		<p>1. 每个表格的格式</p>
		<ul>
			<li>第一行为表格标题（不可为空）</li>
			<li>第二行为列表头</li>
			<li>第三行开始为每行数据</li>
		</ul>

		<p>2. 多个表格之间用空行分割</p>
		<p>3. 只支持window转存为cvs</p>
	</div>
    <?php echo '<script'; ?>
 type="text/javascript" src="./common/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>