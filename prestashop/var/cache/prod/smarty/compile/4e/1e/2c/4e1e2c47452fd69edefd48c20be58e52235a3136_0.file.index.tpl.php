<?php
/* Smarty version 3.1.33, created on 2020-11-09 19:07:08
  from '/var/www/html/prestashop/modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa9854c79dfb9_26974838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e1e2c47452fd69edefd48c20be58e52235a3136' => 
    array (
      0 => '/var/www/html/prestashop/modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl',
      1 => 1588141084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./ps_ready.tpl' => 1,
    'file:./dropdownList.tpl' => 3,
    'file:./elem/modal.tpl' => 1,
  ),
),false)) {
function content_5fa9854c79dfb9_26974838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="psthemecusto" class="container-fluid clearfix">
    <?php if ($_smarty_tpl->tpl_vars['isPsReady']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:./ps_ready.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <div class="panel row">
        <div class="panel-heading text-center">
            <button class="btn btn-primary btn-lg selected" data-id-modal="homepageModal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Homepage','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</button>
            <button class="btn btn-primary btn-lg" data-id-modal="categoryModal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category page','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</button>
            <button class="btn btn-primary btn-lg" data-id-modal="productModal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product page','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</button>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:./dropdownList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elementsList'=>$_smarty_tpl->tpl_vars['homePageList']->value,'idModal'=>'homepage','defaultModalClass'=>''), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./dropdownList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elementsList'=>$_smarty_tpl->tpl_vars['categoryPageList']->value,'idModal'=>'category','defaultModalClass'=>'hide'), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./dropdownList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elementsList'=>$_smarty_tpl->tpl_vars['productPageList']->value,'idModal'=>'product','defaultModalClass'=>'hide'), 0, true);
?>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:./elem/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php }
}
