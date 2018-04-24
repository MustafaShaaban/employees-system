<?php
namespace PHPMVC\LIB;

class Template
{
    private $_template;
    private $_actionView;
    private $_page;
    public $_data;

    public function __construct(array $params)
    {
        $this->_template = $params;
    }

    public function setActionView($view) {
        $this->_actionView = $view;
    }
    public function setActionData($data) {
        $this->_data = $data;
    }
    public function setPage($page) {
        $this->_page = $page;
    }

    private function getHeaderStart() {
        require_once TMP_PATH . DS . 'header-start.php';
    }
    private function getHeaderEnd() {
        require_once TMP_PATH . DS . 'header-end.php';
    }
    private function getFooterStart() {
        require_once TMP_PATH . DS . 'footer-start.php';
    }
    private function getFooterEnd() {
        require_once TMP_PATH . DS . 'footer-end.php';
    }
    private function getTemplateBlock() {
        extract($this->_data);
        foreach ($this->_template['template'] as $key => $value) {
            if ($key == ':view') {
                require_once $this->_actionView;
            } else {
                require_once $value;
            }
        }
    }
    private function getHeaderResources() {
        $maps = ['morris', 'jvectormap'];

        foreach ($this->_template['header_resources']['css'] as $key => $value) {
            if ($this->_page != 'index'){
                if (in_array($key, $maps)) {
                    continue;
                }
            }
            echo "<link rel='stylesheet' href='$value' />";
        }
    }
    private function getFooterResources() {
        $maps = ['raphael', 'morris', 'sparkline', 'jvectormap', 'jvectormapWorld'];

        foreach ($this->_template['footer_resources']['js'] as $key => $value) {
            if ($this->_page != 'index'){
                if (in_array($key, $maps)) {
                    continue;
                }
            }
            echo "<script src='$value'></script>";
        }
    }
    public function renderApp() {
        $this->getHeaderStart();
        $this->getHeaderResources();
        $this->getHeaderEnd();
        $this->getTemplateBlock();
        $this->getFooterStart();
        $this->getFooterResources();
        $this->getFooterEnd();
    }
}