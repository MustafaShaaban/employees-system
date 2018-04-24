<?php
namespace PHPMVC;
use PHPMVC\LIB\FrontController;
use PHPMVC\LIB\Template;

include '../app/config/config.php';
include '../app/lib/autoload.php';
$templateSrc = include '../app/config/templateconfig.php';

session_start();
$template = new Template($templateSrc);
$new = new FrontController($template);
$new->dispatch();