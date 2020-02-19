
<div class="content">
	<!--Container content-->
	<div class="container">
		<!-- Row content -->
		<div class="row">
			<h2 class="cart-name">GIỎ HÀNG</h2>

			

			<div class="form-cart">

				<?php if(isset($_SESSION["cart"])) : ?>
				<?php  if(empty($_SESSION["cart"])) : ?>
					<h3>Giỏ hàng trống</h3>
				<?php else: ?>
				<form method="POST" action="cart">
					<table>
						<thead>
							<tr>
								<th>Xóa</th>
								<th>Tên sản phẩm</th>
								<th>Giá</th>
								<th>Giảm giá</th>
								<th>Số lượng</th>
								<th>Tổng</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						<?php 
						
						foreach ($_SESSION["cart"] as $key => $value) :  ?>		

							<?php $sum1 =  (($value["price"] * $value["qty"]) * (100-$value["sale"]) / 100);
							
							?>
							<tr class="cart-item-1">

								<input type="hidden" name="stt" value="1" />

								<td class="delete-item">
									<a class="delete-cart" href="Controller/frontend.php?action=delete_cart&key=<?=$key?>">Xóa</a>
								</td>
								<td><?php echo $value['product_name']?></td>
								<!-- <input type="hidden" name="name[1]" value="Cupcake vani"> -->
								<td class="price-item"><?= number_format($value['price'])?> đ</td>
								<td class="price-item"><?= number_format($value['sale']) ?> %</td>
								
								<!-- <input type="hidden" name="price[1]" value="50000"> -->
								<td class="number-item"><input id="qty" name="qty" type="number" value="<?=$value['qty']?>" ></td>

								<td class="total-item-price"><?=number_format($sum1) ?></td>
								<td>
								<a href="#" class="cart-money updatecart" data-key="<?=$key?>"  >Cập nhật</a>
								</td>
							</tr>
							<?php $total[] = ($sum1) ;
							$tong =  array_sum($total);

							
						 ?>	
							<?php endforeach; ?>
 							<?php $_SESSION["tong"] =$tong;?>
						</tbody>
					</table>
					<div style="padding-top:20px">
						<span class="cart-total" >Tổng đơn hàng: <?php echo number_format($tong); ?> đ</span>
					</div>
					<div style="padding-top:20px;">
						
						<a href="Controller/frontend.php?action=order_info"><input class="cart-submit" type="button" name="add-all" value="Tiến hành đặt hàng"></a>
					</div>
				</form>
				
				<?php endif; ?>
				<?php  else: ?>
					<h3>Giỏ hàng trống</h3>
				<?php endif ?>

			</div>

					</div><!--End Row-->
	</div><!--End container -->
</div><!--End content-->
