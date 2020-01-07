<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 07.03.19
 * Time: 14:13
 */

/**
 * Class Index
 *
 * Methods:
 * __constructor: make an object from views class and load the page.
 */
class Index extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->request->render('index');
    }
}