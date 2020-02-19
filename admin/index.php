<?php

require  './Data/DatabaseUtil.php';
require  './Data/UserDao.php';
require  './Data/ProductDao.php';
require  './Data/OrderDao.php';
require  "./Models/User.php";
require  "./Models/Order.php";
require  "./Models/Product.php";
require  "./Common/UrlUtil.php";
require  "./Common/AppConstants.php";

$controller = filter_input(INPUT_GET, 'controller');
if ($controller == null)
    $controller = filter_input(INPUT_POST, 'controller');

if ($controller == null)
    $controller = AppConstants::USER_CONTROLLER;


include './Controllers/' . $controller . '.php';


