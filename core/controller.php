<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 06.03.19
 * Time: 14:36
 */

/**
 * Class Controller
 *
 * Methods:
 * __constructor: make an object from views class.
 * loadModel: load wich model it needs.
 */
class Controller {

    public $request;

    public function  __construct()
    {
        $this->request = new view();
    }

    public function loadModel ($name) {
        $file = 'model/'.$name.'.php';
        if (file_exists($file)) {
            require $file;

        }
    }

}