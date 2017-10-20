<?php
/**
 * Created by PhpStorm.
 * User: roza
 * Date: 09.10.17
 * Time: 17:52
 */

namespace App\Box\Central;


use Wbengine\Box\WbengineBoxAbstract;

class Intro extends WbengineBoxAbstract
{


    public static function getIndexBox(){
        return __CLASS__ . __METHOD__;
    }

    public function getIntroBox(){
        return ($this->getRenderer()->render('intro', $this));
    }


    public static function getNeco(){
        return 'Getting neco...';
    }

}