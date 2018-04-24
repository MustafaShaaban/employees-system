<?php
namespace PHPMVC\CONTROLLERS;
use PHPMVC\LIB\FrontController;

class AbstractClass
{
    protected $_controller;
    protected $_action;
    protected $_params;
    protected $_template;

    protected $_data = [];

    public function setController($controller) {
        $this->_controller = $controller;
    }
    public function setAction($action) {
        $this->_action = $action;
    }
    public function setParams($params) {
        $this->_params = $params;
    }
    public function setTemplate($template) {
        $this->_template = $template;
    }

    public function notFoundAction() {
        require_once VIEW_PATH . DS . 'notfound' . DS .'notview.view.php';
    }

    public function _view() {
        $this->_template->setPage($this->_controller);
        if ($this->_action == FrontController::NOT_FOUND_ACTION) {
            require_once VIEW_PATH . DS . 'notfound' . DS .'notview.view.php';
        } else {
            $view = VIEW_PATH . DS . $this->_controller . DS . $this->_action . '.view.php';
                if (file_exists($view)) {
                    $this->_template->setActionData($this->_data);
                    $this->_template->setActionView($view);
                    $this->_template->renderApp();
                } else {
                    require_once VIEW_PATH . DS . 'notfound' . DS . 'notfound.view.php';
                }

        }
    }
}