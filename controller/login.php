<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 06.03.19
 * Time: 15:12
 */
/**
 * class Login
 *
 * Methods:
 * __constructor: make an object from views class and load the page.
 * check login/loadModel.
 */
class Login extends Controller
{

    function __construct()
    {
        parent::__construct();
            $this->request->render('login');
            if ($_POST['LoginForm']) {
                session_start();
                $this->loadModel('user');
                $user = new user();
                $user->setUsername($_POST['username']);
                $user->setPassword(md5($_POST['password']));
                $row = $user->login();
                if (!empty($row)) {
                    foreach ($row as $item) {
                        $session = new Session();
                        $session->set('loggedin', true);
                        $session->set('id', $item['id']);
                        $session->set('firstname', $item['firstname']);
                        $session->set('lastname', $item['lastname']);
                        $session->set('username', $item['username']);
                        $session->set('role', $item['id_role']);
                    }
                }
                if ($_SESSION['loggedin'] == true) {
                    if ($_SESSION['role'] == 1) {
                        header('location:admin');
                } elseif ($_SESSION['role'] == 2) {
                    header('location:student');
                } else {
                    print 'Ihr Konto wird noch nicht existiert';
                }
            }
            }

    }
}