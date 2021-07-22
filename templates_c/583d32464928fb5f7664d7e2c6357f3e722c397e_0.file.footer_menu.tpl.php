<?php
/* Smarty version 3.1.39, created on 2021-07-22 15:36:05
  from 'D:\OpenServer\domains\phpproject.com\templates\menu\footer_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f9663546ab85_81912186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '583d32464928fb5f7664d7e2c6357f3e722c397e' => 
    array (
      0 => 'D:\\OpenServer\\domains\\phpproject.com\\templates\\menu\\footer_menu.tpl',
      1 => 1626957362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f9663546ab85_81912186 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
$_smarty_tpl->tpl_vars['val']->iteration = 0;
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
$_smarty_tpl->tpl_vars['val']->iteration++;
$__foreach_val_0_saved = $_smarty_tpl->tpl_vars['val'];
?>
    <div class="column">
        <div class="title"><?php echo $_smarty_tpl->tpl_vars['val']->value['text'];?>
</div>
        <?php if ($_smarty_tpl->tpl_vars['val']->value['children']) {?>
            <div class="footer-nav">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['val']->value['children'], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                    <a class="footer-link" href="<?php if ($_smarty_tpl->tpl_vars['v']->value['url']) {
echo $_smarty_tpl->tpl_vars['v']->value['url'];
} else { ?>#<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['text'];?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['val']->iteration == 2) {?>
            <div class="app-links"><a href="#"><img src="/img/playmarket.png"></a><a href="#"><img src="/img/appstore.png"></a></div>
        <?php }?>
    </div>
<?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
