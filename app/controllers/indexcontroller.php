<?php
namespace PHPMVC\CONTROLLERS;
use PHPMVC\MODELS\usersModel;

class IndexController extends AbstractClass
{
    public function defaultAction() {
        $this->_view();
    }
}