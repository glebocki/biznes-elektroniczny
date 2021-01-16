<?php
/* Smarty version 3.1.33, created on 2020-11-09 19:05:52
  from '/var/www/html/prestashop/admin504ckxrsd/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa98500c98281_36880814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a30045cec17c5d864343b124fc1d2d5380ec9cef' => 
    array (
      0 => '/var/www/html/prestashop/admin504ckxrsd/themes/default/template/content.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa98500c98281_36880814 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
