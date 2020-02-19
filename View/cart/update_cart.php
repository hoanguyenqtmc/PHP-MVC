<?php
	$key = intval($productDao->getInput("key"));
	$qty = intval($productDao->getInput("qty"));
	$_SESSION['cart'][$key]['qty'] = $qty;
	echo 1; 
 ?>