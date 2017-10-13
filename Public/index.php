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
use Wbengine\Application\Env;


define('APP_DIR', dirname(__DIR__));


require(dirname(__DIR__) . '/vendor/autoload.php');


try {

    /**
     * Create a new instance of object App. You can put environment type as boolean
     * to use exact configuration to given environmet type...
     *
     * An alternates of environment detection:
     * Env::autodetectEnvironment(Env::DETECT_ENV_TYPE_BY_HOSTNAME)
     * Env::autodetectEnvironment(Env::DETECT_ENV_TYPE_BY_IP)
     *
     * @see Env abstract class abstract vars
     *
     * FALSE = Development | TRUE  = Production
     */
    $App = new App( false );


//    $App->get('/hello/{id}/test/{sekce}/', 'getNecox', function($response){
    $App->get('/hello/id-{id}/e', 'getNecox', function($response){
        die(var_dump($response));
    });

    die('die');
//        $name = $route->getParams('name');
//        $response->getNeco()->write("Hello, $name");
//        var_dump($box->getNeco($name));

//        return $box;


//die();
    /**
     * Initialize paths and environmets and run the application...
     */
//    $App->init()->run();


} catch (\Wbengine\Exception\RuntimeException $e) {

    if ($App instanceof App && $App->isDebugOn()) {
        $string = sprintf(file_get_contents(dirname(__DIR__).'/Exception.html'), get_class($e), $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine(), $e->getTraceAsString());
        echo($string);
    } else {
        error_log("Cauth Exception: " . get_class($e) . ", in object:" . $e->getMessage() . $e->getCode() .", in file:" . $e->getFile() . "(" . $e->getLine() . ")", 0);
    }
}
