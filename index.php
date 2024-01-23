<?php

define('APP_PATH', realpath(dirname(__FILE__)) . '/');
define('VIEW_PATH', realpath(dirname(__FILE__)) . '/views/');

require(APP_PATH . 'service/database.php');
require(APP_PATH . 'service/helpers.php');

$database = new Database();

require(VIEW_PATH . 'index.phtml');