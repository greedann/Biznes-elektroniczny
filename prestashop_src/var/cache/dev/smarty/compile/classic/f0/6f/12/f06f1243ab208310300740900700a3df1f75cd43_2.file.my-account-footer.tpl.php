<?php
/* Smarty version 3.1.48, created on 2024-12-07 15:42:08
  from '/var/www/html/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67545ec01adbf9_25695812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f06f1243ab208310300740900700a3df1f75cd43' => 
    array (
      0 => '/var/www/html/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl',
      1 => 1733578339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67545ec01adbf9_25695812 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li>
  <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </a>
</li>
<?php }
}
