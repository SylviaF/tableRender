<?php /* Smarty version 3.1.27, created on 2015-10-27 09:19:38
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tableRender/demo/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:68773084562f339acd7339_18514662%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5978dd104a85e417479c20f2c1a913f016004194' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tableRender/demo/templates/index.tpl',
      1 => 1445933976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68773084562f339acd7339_18514662',
  'variables' => 
  array (
    'allData' => 0,
    'tableData' => 0,
    'col' => 0,
    'line' => 0,
    'td' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562f339ad11984_01140125',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562f339ad11984_01140125')) {
function content_562f339ad11984_01140125 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '68773084562f339acd7339_18514662';
?>
<!DOCTYPE html>
<html>
<head>
    <title>csv生成在线表格</title>
    <meta charset="GBK" />
    <link rel="stylesheet" type="text/css" href="./static/common/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="./static/extensions/Buttons/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="./static/table.css"/>
</head>
<body>
    <ul id="nav">
        <?php
$_from = $_smarty_tpl->tpl_vars['allData']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tableData'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tableData']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_nav'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['tableData']->value) {
$_smarty_tpl->tpl_vars['tableData']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_nav']->value['index']++;
$foreach_tableData_Sav = $_smarty_tpl->tpl_vars['tableData'];
?>
            <li class="tab <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_nav']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_nav']->value['index'] : null) == 0) {?>active<?php }?>" data-tab="<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_nav']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_nav']->value['index'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['tableData']->value['title'];?>
</li>
        <?php
$_smarty_tpl->tpl_vars['tableData'] = $foreach_tableData_Sav;
}
?>
    </ul>
    <div class="tabContent">
        <?php
$_from = $_smarty_tpl->tpl_vars['allData']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tableData'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tableData']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_navContent'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['tableData']->value) {
$_smarty_tpl->tpl_vars['tableData']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_navContent']->value['index']++;
$foreach_tableData_Sav = $_smarty_tpl->tpl_vars['tableData'];
?>
        <div id="navContent-<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_navContent']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_navContent']->value['index'] : null);?>
">
            <table class="display csvTable">
                <thead>
                    <tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['tableData']->value['columns'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['col']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
$foreach_col_Sav = $_smarty_tpl->tpl_vars['col'];
?>
                        <th><?php echo $_smarty_tpl->tpl_vars['col']->value['title'];?>
</th>
                        <?php
$_smarty_tpl->tpl_vars['col'] = $foreach_col_Sav;
}
?>
                    </tr>
                </thead>
         
                <tfoot>
                    <tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['tableData']->value['columns'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['col']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
$foreach_col_Sav = $_smarty_tpl->tpl_vars['col'];
?>
                        <th><?php echo $_smarty_tpl->tpl_vars['col']->value['title'];?>
</th>
                        <?php
$_smarty_tpl->tpl_vars['col'] = $foreach_col_Sav;
}
?>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['tableData']->value['data'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['line'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['line']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
$foreach_line_Sav = $_smarty_tpl->tpl_vars['line'];
?>
                    <tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['line']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['td'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['td']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['td']->value) {
$_smarty_tpl->tpl_vars['td']->_loop = true;
$foreach_td_Sav = $_smarty_tpl->tpl_vars['td'];
?>
                        <td><?php echo $_smarty_tpl->tpl_vars['td']->value;?>
</td>
                        <?php
$_smarty_tpl->tpl_vars['td'] = $foreach_td_Sav;
}
?>
                    </tr>
                    <?php
$_smarty_tpl->tpl_vars['line'] = $foreach_line_Sav;
}
?>
                </tbody>
            </table>
        </div>
        <?php
$_smarty_tpl->tpl_vars['tableData'] = $foreach_tableData_Sav;
}
?>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript" src="./static/common/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./static/common/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./static/extensions/Buttons/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./static/extensions/Buttons/js/buttons.print.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./static/extensions/Buttons/js/buttons.flash.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./static/extensions/Buttons/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./static/table.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>