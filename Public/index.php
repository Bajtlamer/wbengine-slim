<?php

/**
 * $Id: index.php 86 2017-04-13 17:02:12Z bajtlamer $
 * -------------------------------------------------------------
 * Default index file.
 *
 * @package WBengine - https://packagist.org/packages/wbengine/
 * @version $Rev: 1.0 $ $Date$ $Author: bajtlamer $
 * @copyright (c) 2010-2017 RRsoft www.rrsoft.cz
 * @license GNU Public License
 *
 * Minimum Requirement: PHP 5.6.x
 */

use App\App;
use App\Box\Central\Intro;
use Wbengine\Router;


define('APP_DIR', dirname(__DIR__));


require(dirname(__DIR__) . '/vendor/autoload.php');


try {

//    $App = new App();

    Router::get('/api/', 'api@index', function(){
        echo('Welcome to Wbengine Rest API v1.0');
    });

    Router::get('/api/site/{site_id}', 'api@apiGetSite', function($box){
        echo($box->apiGetSite());
    });

    Router::get('/', '\App\Box\Central\Intro@getIntroBox', function($box){
        echo($box->getIntroBox());
    });



//    die('die');


    /**
     * Initialize paths and environmets and run the application...
     */
//    $App->init()->run();
//    $App->init();

//    var_dump($App->getVars());


} catch (\Wbengine\Exception\RuntimeException $e) {

    if ($App instanceof App && $App->isDebugOn()) {
        $string = sprintf(file_get_contents(dirname(__DIR__).'/Exception.html'), get_class($e), $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine(), $e->getTraceAsString());
        echo($string);
    } else {
        error_log("Cauth Exception: " . get_class($e) . ", in object:" . $e->getMessage() . $e->getCode() .", in file:" . $e->getFile() . "(" . $e->getLine() . ")", 0);
    }
}
