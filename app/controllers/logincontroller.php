<?php
namespace PHPMVC\CONTROLLERS;
use PHPMVC\LIB\Helper;

class LoginController extends AbstractClass
{
    use Helper;

    public function defaultAction() {
        if (isset($_POST['username'])) {
            $_SESSION['username'] = $_POST['username'];
            exit();
        }

        if (isset($_SESSION['username'])) {
            $this->redirect('/index'); exit();
        }

        $this->_view();
    }


    public function logoutAction() {
        if (isset($_SESSION['username'])) {
            session_unset();
            session_destroy();
            $this->redirect('/index');
            exit();
        }
    }
}