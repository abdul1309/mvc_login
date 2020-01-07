<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 07.03.19
 * Time: 00:20
 */

/**
 * class Register
 *
 * Methods:
 * __constructor: make an object from views class and load the page.
 * check register/loadModel.
 */
class Register extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->request->render('register');
        if (isset($_POST['registerButton']) && !empty($_POST['username'] && !empty($_POST['password'])) && $_POST['password'] == $_POST['confirmPassword'] && !empty($_POST['email'])) {
            $this->loadModel('user');
            $user= new user();
            $user->setFirstname($_POST['firstName']);
            $user->setLastname($_POST['lastName']);
            $user->setUsername($_POST['username']);
            $user->setPassword(md5($_POST['password']));
            $user->setDateOfBirth($_POST['birthday']);
            $user->setEmail($_POST['email']);
            $user->setAddress($_POST['address']);
            $user->setIdRole(0);
            $result = $user->Register();
            if ($result == 'success') {
                header('location:index');
            }

        }
    }
}