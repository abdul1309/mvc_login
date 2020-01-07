<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 06.03.19
 * Time: 16:44
 */

/**
 * class Error404
 *
 * Methods:
 * __constructor: make an object from views class and load the page.
 */
class Error404 extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->request->render('error404');
    }
}