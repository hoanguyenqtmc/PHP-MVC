<?php include '../View/Common/header.php';  ?>		






</header>	<link rel="stylesheet" type="text/css" href="public/stylesheet/products_style.css">
<!--Content -->

<div class="content">
	<!--Container content-->
	<div class="container">
		<!-- Row content -->
		<div class="row">
			<div class="body-left">
				<h2 class="title-category">DANH MỤC SẢN PHẨM</h2>
<ul class="list-category wow fadeInLeft">

			<h3><a href="product/list_all/3" title="Bánh gato"><li class="list-cat-menu">Bánh gato</li></a></h3>
			<h3><a href="product/list_all/2" title="Bánh ngọt"><li class="list-cat-menu">Bánh ngọt</li></a></h3>
			<h3><a href="product/list_all/1" title="Bánh kem"><li class="list-cat-menu">Bánh kem</li></a></h3>
	
</ul>			</div>
			<div class="body-right">
				<div id="phuong-showsp">
					<h2 id="phuong-title">TẤT CẢ SẢN PHẨM</h2>
				 <?php 
 					foreach ($products as $product) :
				?>
						<div class="category-product-wrapper wow fadeInLeft">
							<div class="category-product-content">
								<div class="category-product-image">
									<a href="Controller/Frontend.php?action=product_detail&id=<?=$product['product_id']?>"><img src="public/images/<?=$product['image'] ?>"/></a>
								</div>
								<div class="category-product-info">
									<button class="callcart"><a  href="Controller/Frontend.php?action=addcart&id=<?=$product['product_id']?>">Đặt hàng</a></button>
									<span class="category-product-name"><?=$product['product_name'] ?></span>
									<span class="category-product-price"><?=$product['price'] ?> đ</span>
								</div>
							</div>
						</div>
				<?php endforeach ?>
				

				</div>
					<div class="pagination" style="clear:both">
						<ul class="paginate">
							<li class='active'><span>1</span></li><li><a href="/cakeshop/product?page=2" title="Trang 2">2</a></li>						</ul>
					</div>
			</div>

		</div><!--End Row-->
	</div><!--End container -->
</div><!--End content-->
<?php include '../View/Common/footer.php';  ?>		
