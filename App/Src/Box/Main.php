<?php
/**
 * Created by PhpStorm.
 * User: roza
 * Date: 09.10.17
 * Time: 17:52
 */

namespace App\Box;


use App\Box\Exception\BoxException;
use Wbengine\Box\BoxController;
use Wbengine\Box\Model;
use Wbengine\Url;

class main extends BoxController
{

    protected $values = array();



    function __set($id, $value)
    {
        $this->values[$id] = $value;
    }

    function __get($id)
    {
        if (!isset($this->values[$id]))
        {
            throw new BoxException(sprintf('Value "->%s<-" is not defined.', $id));
        }

        return is_callable($this->values[$id]) ? $this->values[$id]($this) : $this->values[$id];
    }


    public function tiskni(){
        return 'Tak tedy tisknu';
    }


    public function getNeco(){
        return 'Getting neco...';
    }

}