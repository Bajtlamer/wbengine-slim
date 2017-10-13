<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of App
 *
 * @author bajtlamer
 */

namespace App;

use App\Interfaces\AppInterface;
use Wbengine\Application\Application;
use Wbengine\Application\Path\Path;
use Wbengine\Config;
use Wbengine\Debug;
use Wbengine\Site\SiteException;
use Wbengine\Application\Path\File;


class App extends Application implements AppInterface
{
    const APP_BASE_DIR              = '/App';
    const APP_CONFIG_PATH           = '/Config/';
    const APP_TEMPLATE_PATH         = '/Src/View';
    const APP_TYPE_CACHE            = '/Cache';
    const APP_TYPE_RENDERER_TEMP    = '/Renderer';
    const ENV_TYPE_PRODUCTION       = true;



    public function __construct($env_production = true)
    {
        self::$APP_BASE_DIR             = self::APP_BASE_DIR;
        self::$APP_CONFIG_PATH          = self::APP_CONFIG_PATH;
        self::$APP_TEMPLATE_PATH        = self::APP_TEMPLATE_PATH;
        self::$APP_TYPE_CACHE           = self::APP_TYPE_CACHE;
        self::$APP_TYPE_RENDERER_TEMP   = self::APP_TYPE_RENDERER_TEMP;
        self::$ENV_TYPE_PRODUCTION      = self::ENV_TYPE_PRODUCTION;

        if($env_production) {
            $this->setConfigFile(Config::CONFIG_FILE_PRODUCCTION);
        }else{
            $this->setConfigFile(Config::CONFIG_FILE_DEVEL);
        }

        /**
         * 1. LOAD CONFIGURATION
         * Setup config file example over class setter...
         */
        $this->setConfig(
            Config::load(new File(
                    dirname(__DIR__) .
                    self::APP_CONFIG_PATH .
                    $this->getConfigFile(),
                    true)
            )
        );

        if($this->isDebugOn() === true){
            ini_set('display_errors', 1);
            $this->setStartTime(microtime());
        }
    }


    /**
     * Initialize master app object for use...
     * @return Application
     * @internal param string $configFileName
     */
    public function init()
    {
        try {

            /**
             * Set application BASE path as firs ...
             */
            $this->setPath(Path::TYPE_BASE, (dirname(__DIR__)));

            /**
             * Set app cache directory path ...
             */
            $this->setPath(Path::TYPE_CACHE, self::APP_TYPE_CACHE);


            /**
             * setup errorhandler ...
             */
            set_error_handler(array($this->getErrorHandler(), 'SetErrorHandler'));

            /**
             * .. SET CURRENT TIMEZONE (OPTIONAL)...
             */
            date_default_timezone_set(Config::getTimeZone());


            /**
             * 3. FIST TIME INIT OBJECT SITE
             */

            $this->getSite()->initialize($this);

            /**
             * 4. THE MINIMALIZE CSS FILE OPTION ...
             */
            if((boolean)Config::minimizeCss()){
                $this->minimizeCssFiles(Config::getCssCollection(),  APP_DIR);
            }

            } catch (SiteException $e) {

                //@todo We need to solve all other error codes...
                $this->addException('Site not found.', HTML_ERROR_404);
                $this->setValue(HTML_CENTRAL_SECTION, $this->getRenderer()->getErrorBox($e));
            }

        if(Config::isDebugEnabled()) {
            $this->setEndtime(microtime());
            $this->setValue('debug', new Debug($this));
        }
        return $this;
    }

}
