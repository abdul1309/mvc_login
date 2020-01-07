<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 13.03.19
 * Time: 16:32
 */
/**
 * class Student
 *
 * Methods:
 * __constructor: make an object from views class and load the page.
 */
class Student extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->request->render('student');
    }
}
