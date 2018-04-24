<?php

namespace PHPMVC\LIB;

use PHPMVC\CONTROLLERS\AbstractClass;

class FrontController extends AbstractClass{

    const NOT_FOUND_CLASS = 'PHPMVC\CONTROLLERS\NotFoundController';
    const NOT_FOUND_ACTION = 'notFoundAction';

    protected $_controller = 'index';
    protected $_action = 'default';
    protected $_param = [];
    protected $_template = [];

    public function __construct(Template $template)
    {
        $this->_template = $template;
        $this->_parseUrl();
    }

    private function _parseUrl() {
        $url = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'), 3);
        if(isset($url[0]) && $url[0] != ''){
            $this->_controller = $url[0];
        }
        if(isset($url[1]) && $url[1] != ''){
            $this->_action = $url[1];
        }
        if(isset($url[2]) && $url[2] != ''){
            $this->_param = explode('/', $url[2]);
        }
    }

    public function dispatch() {
        $controllerClassName = 'PHPMVC\CONTROLLERS\\' . ucwords($this->_controller) . 'Controller';
        $actionName = $this->_action . 'Action';

        if(!class_exists($controllerClassName)){
            $controllerClassName = self::NOT_FOUND_CLASS;
        }

        $controller = new $controllerClassName;

        if(!method_exists($controller, $actionName)) {
            $actionName = self::NOT_FOUND_ACTION;
        }

        if (!isset($_SESSION['username'])) {
            $this->_controller = "login";
            $this->_action = "default";
        }

        $controller->setController($this->_controller);
        $controller->setAction($this->_action);
        $controller->setParams($this->_param);
        $controller->setTemplate($this->_template);
        $controller->$actionName();

    }

}
