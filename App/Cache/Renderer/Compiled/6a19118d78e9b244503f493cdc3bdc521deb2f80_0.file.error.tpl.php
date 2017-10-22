<?php
/* Smarty version 3.1.31, created on 2017-10-22 02:45:37
  from "/home/roza/projekty/wbengine-slim/App/Src/View/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ebea31af8913_43262625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a19118d78e9b244503f493cdc3bdc521deb2f80' => 
    array (
      0 => '/home/roza/projekty/wbengine-slim/App/Src/View/error.tpl',
      1 => 1508618410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ebea31af8913_43262625 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="jumbotron alert alert-danger">
    <h1 class="display-3">Application Error</h1>
    <p class="lead"><?php echo $_smarty_tpl->tpl_vars['error']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['error']->value['code'];?>
</p>
    <hr class="my-4">
    <h4>Exception info:</h4>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['error']->value['msg'];?>
</li>
    </ul>
    <p>&ensp;</p>
</div><?php }
}
