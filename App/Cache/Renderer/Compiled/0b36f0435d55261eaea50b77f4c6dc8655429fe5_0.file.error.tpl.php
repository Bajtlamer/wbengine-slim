<?php
/* Smarty version 3.1.31, created on 2017-10-20 18:49:00
  from "/Users/roza/Projekty/wbengine-slim/App/Src/View/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ea28fc2c38b0_39967908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b36f0435d55261eaea50b77f4c6dc8655429fe5' => 
    array (
      0 => '/Users/roza/Projekty/wbengine-slim/App/Src/View/error.tpl',
      1 => 1507562635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ea28fc2c38b0_39967908 (Smarty_Internal_Template $_smarty_tpl) {
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
