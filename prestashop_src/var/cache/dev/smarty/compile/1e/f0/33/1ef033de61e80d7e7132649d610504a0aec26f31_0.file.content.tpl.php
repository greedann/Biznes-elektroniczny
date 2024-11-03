<?php
/* Smarty version 3.1.48, created on 2024-10-27 17:10:55
  from '/var/www/html/admin1337/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_671e660fb591a9_87557649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ef033de61e80d7e7132649d610504a0aec26f31' => 
    array (
      0 => '/var/www/html/admin1337/themes/default/template/content.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671e660fb591a9_87557649 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
