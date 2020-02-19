<?php 
include "../Data/DatabaseUtil.php";
include "../Data/ProductDao.php";
include "../Model/Product.php";


$action = '';
$productDao = new ProductDao();
if (isset($_GET['action']))
    $action = $_GET['action'];
else if (isset($_POST['action']))
    $action = $_POST['action'];


switch ($action) {
	case 'about':
		include '../View/about.php';
		break;
	case 'contact':
		include '../Model/message.php';
		include '../View/contact.php';
		break;

	case 'login':
		include '../View/login.php';
		break;
	case 'product':
		$products = $productDao->Find();
		include "../View/Common/header.php";
		include '../View/product/product.php';
		include "../View/Common/footer.php";

		break;
	case 'order_info':
		header("location: ./OrderController.php");
		//include "../View/cart/order_info.php";
		break;
	case 'product_detail':
		$id = filter_input(INPUT_GET, 'id');
        $product = $productDao->FindOne($id);

    	include '../View/Common/header.php';
		include "../View/product/product_detail.php";
    	include '../View/Common/footer.php';


		break;
	case 'showcart':
		include '../View/Common/header.php';
		include '../View/cart/showcart.php';
		include '../View/Common/footer.php';
		break;
	case 'addcart':
		//kiem tra session
		$id = filter_input(INPUT_GET, 'id');
        $product = $productDao->FindOne($id);
	
			if (isset($_SESSION["cart"])) {
			if (isset($_SESSION["cart"][$id]['qty'])) {
				$_SESSION['cart'][$id]['qty'] +=1;
			}
			else{
				$_SESSION['cart'][$id]['qty'] =1;
			}
			$_SESSION["cart"] [$id]["product_name"] =$product['product_name'];
			$_SESSION["cart"] [$id]["product_id"] =$product['product_id'];
			$_SESSION["cart"] [$id]["price"] =$product['price'];
			$_SESSION["cart"] [$id]["sale"] =$product['sale'];
			$_SESSION['success'] = 'Cập nhật giỏ hàng thành công !';
			header("location: frontend.php?action=product");

		}else{
			$_SESSION["cart"] [$id]["qty"] = 1;
			$_SESSION["cart"] [$id]["product_name"] =$product['product_name'];
			$_SESSION["cart"] [$id]["product_id"] =$product['product_id'];
			$_SESSION["cart"] [$id]["price"] =$product['price'];
			$_SESSION["cart"] [$id]["sale"] =$product['sale'];
			$_SESSION['success'] = 'Tạo mới giỏ hàng thành công !';
			header("location: frontend.php?action=product");
		}


		break;
	case 'delete_cart':
		$key = $_GET["key"];
		if(!empty($_SESSION["cart"])) {
		foreach($_SESSION["cart"] as $k => $v) {
			if($key == $k)
				unset($_SESSION["cart"][$k]);				
			if(empty($_SESSION["cart"]))
				unset($_SESSION["cart"]);
		}
	}
		header("location: Frontend.php?action=showcart");
	break;
	case 'upcart':

		include "../View/cart/update_cart.php";
		break;
	default:
		$products = $productDao->Find();
		include "../View/home.php";
		break;
}
 ?>