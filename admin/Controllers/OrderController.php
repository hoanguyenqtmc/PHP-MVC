<?php
session_start();
$action = 'view';
if (isset($_GET['action']))
    $action = $_GET['action'];
else if (isset($_POST['action']))
    $action = $_POST['action'];

$controller = AppConstants::ORDER_CONTROLLER;
$userDao = new UserDao();
$userDao -> CheckLoginProcess();
$OrderDao  = new OrderDao();
switch ($action) {
    case 'detail':
        $id = filter_input(INPUT_GET, 'id');
        $order = $OrderDao->FindOrder($id);


        include('./Views/Order/detail.php');
        break;
     case 'delete':
        $id = filter_input(INPUT_GET, 'id');
        $OrderDao->Delete($id);

        $message = "The User $id has been delete!";
        
        $orders = $OrderDao->Find();
        include('./Views/Order/view.php');
        break;   
    default:
        $orders = $OrderDao->Find();
        include('./Views/Order/view.php');
        break;
}



