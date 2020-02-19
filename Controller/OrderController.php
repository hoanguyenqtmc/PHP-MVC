<?php 
if (!isset($_SESSION['cart'])) {
      $a=0;
    }
    elseif (empty($_SESSION['cart'])) {
      $a=0;
    }
    else{
      $a = count($_SESSION['cart']);
    };
  ?>
<?php
$action = 'home';
if (isset($_GET['action']))
    $action = $_GET['action'];
else if (isset($_POST['action']))
    $action = $_POST['action'];

include_once "../Data/OrderDao.php";
include_once "../Data/DatabaseUtil.php";
include_once "../Model/Order.php";
$OrderDao =new OrderDao();
switch ($action) {
	case 'order_add':
	$order = new Order();
    $order->RetrieveRequestParam();


    if ($order) {
    	try {
    		$OrderDao->Insert_order($order);
    		$OrderDao->Insert_pro_order($order);
    		//unset($_SESSION['cart']);unset($_SESSION['tong']);
    		echo "<script>alert('Đặt hàng thành công, chúng tôi sẽ liên hệ với bạn sớm nhất');window.location.href='frontend.php'</script>";
    	} catch (Exception $e) {
    		echo "<script>alert('Có lỗi sảy ra, vui lòng thử lại sau')</script>";
    	}
    }
	include('../View/cart/showcart.php');
		break;
	case 'del':
		$id = filter_input(INPUT_GET, 'id');
		$order = $OrderDao->Delete($id);
		$message= "Delete Order ID= $id complete!";
		$order = $OrderDao->Find();
	include('./Views/order/list.php');
		break;
	case 'view':
		$id = filter_input(INPUT_GET, 'id');
		$orders = $OrderDao->FindOrder($id);
	include('./Views/order/detail.php');
		break;
	case 'process':
		$id = filter_input(INPUT_GET, 'id');
		$OrderDao->Process($id);
		$message= "Order id: $id processed!";
		$order = $OrderDao->Find();
	include('./Views/order/list.php');
		break;
	default:
		$order = $OrderDao->Find();
	include('../View/cart/order_info.php');
        break;
    }
?>
