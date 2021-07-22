<?php
/* Smarty version 3.1.39, created on 2021-07-22 14:34:04
  from 'D:\OpenServer\domains\phpproject.com\templates\menu\top_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f957ac01e2c6_76679964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f276be42c13f798bea14b329d9e6c1d63699dd1' => 
    array (
      0 => 'D:\\OpenServer\\domains\\phpproject.com\\templates\\menu\\top_menu.tpl',
      1 => 1626953639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f957ac01e2c6_76679964 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <ul class="nav">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
            <li class="item-level-0"><a class="link-level-0" href="<?php if ($_smarty_tpl->tpl_vars['val']->value['url']) {
echo $_smarty_tpl->tpl_vars['val']->value['url'];
} else { ?>#<?php }?>"><?php echo $_smarty_tpl->tpl_vars['val']->value['text'];?>
</a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
