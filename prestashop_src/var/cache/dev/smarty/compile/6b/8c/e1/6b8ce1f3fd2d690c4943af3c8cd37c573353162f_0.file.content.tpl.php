<?php
/* Smarty version 3.1.48, created on 2024-11-05 14:57:07
  from '/var/www/html/admin1337/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a243355d262_21846068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b8ce1f3fd2d690c4943af3c8cd37c573353162f' => 
    array (
      0 => '/var/www/html/admin1337/themes/new-theme/template/content.tpl',
      1 => 1730808586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a243355d262_21846068 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}