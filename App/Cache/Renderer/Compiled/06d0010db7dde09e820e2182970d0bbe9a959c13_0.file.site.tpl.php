<?php
/* Smarty version 3.1.31, created on 2017-10-17 20:24:04
  from "/Users/roza/Projekty/wbengine-slim/App/Src/View/site.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59e64ac46582a1_53680183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06d0010db7dde09e820e2182970d0bbe9a959c13' => 
    array (
      0 => '/Users/roza/Projekty/wbengine-slim/App/Src/View/site.tpl',
      1 => 1507562635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e64ac46582a1_53680183 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value['keywords'];?>
"/>
        <meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value['description'];?>
"/>
        <meta name="rating" content="General"/>
        <meta name="copyright" content="RRSOFT © 2015 All rigts reserverd. Email: info@wbengine.com"/>
        <meta name="robots" content="index,follow"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Cache-control" content="no-cache"/>
        <title><?php echo $_smarty_tpl->tpl_vars['meta']->value['title'];?>
</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
        <link href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value['host'];?>
/Css/default<?php echo $_smarty_tpl->tpl_vars['meta']->value['minimizeCss'];?>
.css" rel="StyleSheet" type="text/css" media="screen"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value['host'];?>
/Css/bootstrap<?php echo $_smarty_tpl->tpl_vars['meta']->value['minimizeCss'];?>
.css" rel="StyleSheet" type="text/css" media="screen"/>
    </head>
    <body>
    <!-- Static navbar -->
    <nav class="container-fluid padde">
        <div class="container navbar-default container-narrow">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnavbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" title="WBengine Skeleton Application">
                    <img class="logo" src="/Images/WBengina_ico_light_blue_72.png" />
                    <span class="logo-caption">WebBoxEngine</span>
                </a>
            </div>
            <div id="topnavbar" class="navbar-collapse collapse pull-right">
                <ul class="nav navbar-nav">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['m']->value->selected()) {?>selected <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['m']->value->link;?>
" title="<?php echo $_smarty_tpl->tpl_vars['m']->value->description;?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value->name;?>
</a>
                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </ul>
            </div>
        </div>
    </nav>
    <div class="padder-small"></div>
    
    <?php if ($_smarty_tpl->tpl_vars['header']->value) {?>
    <div class="container">
        <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['left']->value) {?>
    <div class="container">
        <?php echo $_smarty_tpl->tpl_vars['left']->value;?>

    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['central']->value) {?>
    <div class="container centralbox">
        <?php echo $_smarty_tpl->tpl_vars['central']->value;?>

    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['left']->value) {?>
    <div class="container">
        <?php echo $_smarty_tpl->tpl_vars['right']->value;?>

    </div>
    <?php }?>
    
    <footer class="footer">
        <!-- Begin page content -->
        <div class="container">
            <div class="page-header">
                <h1>What is WBengine</h1>
            </div>
            <p class="lead">Wbengine is open source PHP Library that is easy to use for creating websites or web
                applications.</p>
            <p>Use <a href="https://packagist.org/packages/wbengine/wbengine">Packagist direct link</a> to watch new
                versions or updates.</p>
        </div>
        <div class="container">
            <p class="text-muted">Powered by <a href="https://www.rrsoft.cz/" title="RRSOFT - Wbengine">RRSOFT</a> &copy;
                2014 All Rights Reserved.</p>
        </div>
    </footer>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous">
        <?php echo '</script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['debug']->value->enabled) {?>
            <?php echo $_smarty_tpl->tpl_vars['debug']->value->show();?>

        <?php }?>
    </body>
</html>

<?php }
}
