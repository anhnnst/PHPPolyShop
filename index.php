<?php

require  './Data/DatabaseUtil.php';
require  './Data/UserDao.php';
require  "./Models/User.php";
require  "./Common/UrlUtil.php";
require  "./Common/AppConstants.php";

$controller = filter_input(INPUT_GET, 'controller');
if ($controller == null)
    $controller = filter_input(INPUT_POST, 'controller');

if ($controller == null)
    $controller = AppConstants::USER_CONTROLLER;


include './Controllers/' . $controller . '.php';


