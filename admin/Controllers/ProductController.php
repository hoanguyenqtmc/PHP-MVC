<?php

session_start();
$action = "list";
 
if (isset($_GET['action']))
    $action = $_GET['action'];
else if (isset($_POST['action']))
    $action = $_POST['action'];
$userDao = new UserDao();
$userDao -> CheckLoginProcess();
$controller = AppConstants::Product_CONTROLLER;
$productDao = new ProductDao();



switch ($action) {
	case 'view':
		$id = filter_input(INPUT_GET, 'id');
        $product = $productDao->FindOne($id);
        include('./Views/Product/view.php');
		break;
	case 'add':
        include('./Views/Product/add.php');
        break;
    case 'add_save':
        $product = new Product();
        $product->RetrieveRequestParam();
        $productDao->InsertP($product);
        $message = "The product $product->Name has been saved!";
        include('./Views/Product/add.php');
        break;
    case 'edit':
        $id = filter_input(INPUT_GET, 'id');
        $product = $productDao->FindOne($id);

        include('./Views/Product/edit.php');
        break;
    case 'edit_save':



        $product = new Product();
        $product->RetrieveRequestParam();

        $productDao->Update($product);



        $message = "The Product $product->Name has been updated!";
        include('./Views/Product/edit.php');
        break;
    case 'delete':
        $id = filter_input(INPUT_GET, 'id');
        $productDao->Delete($id);

        $message = "The Product $id has been delete!";
        
        $products = $productDao->Find();
        include('./Views/Product/list.php');
        break;
	default:

		$products = $productDao->Find();
		include './Views/Product/list.php';
		break;
}
