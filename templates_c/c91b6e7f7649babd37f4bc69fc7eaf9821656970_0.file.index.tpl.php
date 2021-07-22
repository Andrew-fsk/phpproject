<?php
/* Smarty version 3.1.39, created on 2021-07-20 14:41:11
  from 'D:\OpenServer\domains\phpproject.com\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f6b657319549_48571316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c91b6e7f7649babd37f4bc69fc7eaf9821656970' => 
    array (
      0 => 'D:\\OpenServer\\domains\\phpproject.com\\templates\\index.tpl',
      1 => 1626781267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f6b657319549_48571316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162232173460f6b65730c8c3_52411800', "page_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "page_content"} */
class Block_162232173460f6b65730c8c3_52411800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_162232173460f6b65730c8c3_52411800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h1>Index page</h1>
    </div>
<?php
}
}
/* {/block "page_content"} */
}
