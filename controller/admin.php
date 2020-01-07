<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 13.03.19
 * Time: 14:44
 */

/**
 * class Admin
 * Methods:
 * __constructor: make an object from views class and load the page.
 */
class Admin extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->request->render('admin');
    }
}