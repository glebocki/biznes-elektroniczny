<?php
/* Smarty version 3.1.33, created on 2020-11-08 17:42:47
  from '/var/www/html/prestashop/admin846mgypn3/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa82007aff1d4_57460326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '263d4fae1ddb1ed96bc45b84f1fbbc6b8b4806f6' => 
    array (
      0 => '/var/www/html/prestashop/admin846mgypn3/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa82007aff1d4_57460326 (Smarty_Internal_Template $_smarty_tpl) {
?><a onclick="loadTaxRule('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i>
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
