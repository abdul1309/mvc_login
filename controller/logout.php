<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 18.03.19
 * Time: 18:16
 */
/**
 * class Logout
 *
 * Methods:
 * __constructor: make an object from views class and load the page.
 * check logout
 */
class Logout extends Controller {

    public function __construct()
    {
        parent::__construct();
        if (isset($_POST['logout'])) {
            $session = new Session();
            $session->destroy();
            header('location:login');
        }
    }
}