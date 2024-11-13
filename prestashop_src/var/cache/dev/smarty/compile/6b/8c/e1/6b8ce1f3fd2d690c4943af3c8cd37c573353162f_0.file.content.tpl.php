<?php
/* Smarty version 3.1.48, created on 2024-11-13 15:12:37
  from '/var/www/html/admin1337/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6734b3d5c98e87_93907056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b8ce1f3fd2d690c4943af3c8cd37c573353162f' => 
    array (
      0 => '/var/www/html/admin1337/themes/new-theme/template/content.tpl',
      1 => 1731504191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6734b3d5c98e87_93907056 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
