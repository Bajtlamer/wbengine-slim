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
use Wbengine\Application\Http\RequestInterface as Request;
use Wbengine\Application\Http\ResponseInterface as Response;
use Wbengine\Router;

define('APP_DIR', dirname(__DIR__));


require(dirname(__DIR__) . '/vendor/autoload.php');



    $App = new App();
    
    Router::get('/api/',  function(){
        die('Welcome to Wbengine Rest API v1.0');
    });
    
    Router::get('/api/site/{site_id}',  function($box){
        die(sprintf('You requested site %s.', ($box->getParams()['site_id'])));
    });

    $App->get('/{version}', function(Request $request, Response $response){
//        echo($request->getParams()['version']);
        $response->setValue('central', $request->getParams()['version']);
    });

    $App->get('/', function(Request $request, Response $response){
        die($request->getStaticBox('App\Box\Central\Intro@getIntroBox'));
    });

    Router::post('/{version}', '\App\Box\Central\Intro@getIntroBox', function($box){
        die(json_encode($box));
    });


    $App->init()->run();

