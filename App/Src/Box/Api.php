<?php
/**
 * Created by PhpStorm.
 * User: roza
 * Date: 09.10.17
 * Time: 17:52
 */

namespace App\Box;


use Wbengine\Box\WbengineBoxAbstract;
use Wbengine\Components\ComponentParentInterface;
use Wbengine\Router\Route;

class Api extends WbengineBoxAbstract
{
    private $_params;


    public function __get($name)
    {
        if($this->_params && is_array($this->_params)){
            if(array_key_exists($name, $this->_params)){
                return $this->_params[$name];
            }
        }
        return null;
    }

    public function __construct(ComponentParentInterface $parent)
    {
        parent::__construct($parent);
        if($parent instanceof Route){
            $this->_params = $parent->getParams();
        }
    }

    public static function index(){
        return die('welcome');
    }

    public function netiskni(){
        return ($this->getRenderer()->render('test', $this));
    }


    public function apiGetSite(){
        return 'Getting Site by ID:' . $this->site_id;
    }

    public function getNeco(){
        return 'Getting neco...';
    }

}