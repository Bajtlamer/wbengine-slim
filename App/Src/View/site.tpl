<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="{$meta.keywords}"/>
        <meta name="Description" content="{$meta.description}"/>
        <meta name="rating" content="General"/>
        <meta name="copyright" content="RRSOFT © 2015 All rigts reserverd. Email: info@wbengine.com"/>
        <meta name="robots" content="index,follow"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Cache-control" content="no-cache"/>
        <title>{$meta.title}</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
        <link href="{$cdn.host}/Css/default{$meta.minimizeCss}.css" rel="StyleSheet" type="text/css" media="screen"/>
        <link href="{$cdn.host}/Css/bootstrap{$meta.minimizeCss}.css" rel="StyleSheet" type="text/css" media="screen"/>
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
                    {foreach $menu as $m}
                        <li class="{if $m->selected()}selected {/if}">
                            <a href="{$m->link}" title="{$m->description}">{$m->name}</a>
                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>
    </nav>
    <div class="padder-small"></div>
    {*WEBPAGE CONTENT*}
    {if $header}
    <div class="container">
        {$header}
    </div>
    {/if}
    {if $left}
    <div class="container">
        {$left}
    </div>
    {/if}
    {if $central}
    <div class="container centralbox">
        {$central}
    </div>
    {/if}
    {if $left}
    <div class="container">
        {$right}
    </div>
    {/if}
    {*FOOTER START*}
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous">
        </script>
        {if $debug->enabled}
            {$debug->show()}
        {/if}
    </body>
</html>

