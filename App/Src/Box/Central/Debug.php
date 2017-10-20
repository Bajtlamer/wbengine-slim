<?php
/**
 * Created by PhpStorm.
 * User: roza
 * Date: 09.10.17
 * Time: 17:52
 */

namespace App\Box\Central;


use Wbengine\Box\WbengineBoxAbstract;

class Debug extends WbengineBoxAbstract
{


    public function getIndexBox(){
//        var_dump($this->getSite());
        return (__CLASS__ . __METHOD__);
    }


}