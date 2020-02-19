<?php 
	include 'Common/header.php';
 ?>

<script type="text/javascript">

	//Background images
	function slideSwitch() {

			// Lấy giá trị của background đang được active
		    var $active = $('#background-index img.active');

		    // Nếu không có image nào đc active(length=0) thì lấy image cuối cùng
		    if ( $active.length == 0 ) $active = $('#background-index img:last');

		    // Nếu Sau image không còn image nào nữa(length=0) thì sẽ gọi về image đầu tiên
		    var $next =  $active.next().length ? $active.next() : $('#background-index img:first');

		    // Thêm tên class vào trong image đã được active gần nhất
		    $active.addClass('last-active');

		    // Thêm css, hiệu ứng cho image tiếp theo. Đặt class cho image tiếp theo là active. Đồng thời remove class active và last-active đã thêm vào image trước. 
		    $next.css({opacity: 0.0})
		        .addClass('active')
		        .animate({opacity: 1.0}, 1000, function() {
		            $active.removeClass('active last-active');
		        });
		}
	//Thực hiện gọi hàm Background Images
	$(function() {
		setInterval( "slideSwitch()", 5000 );
	});
</script>

<!--BackGround Index -->
<div id="background-index">
    <img src="./public/images/slider-1.jpg" alt="" class="active" style="opacity: 1;">
    <img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/slider-2.jpg" alt="" class="" style="opacity: 1;">
</div>




<!--LOGO website index -->
		<section id="logo-cake">
			<div class="container">
				<div class="row">

					<div class="logo-content">
						<div class="logo-image">
							<img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/slider.png">
						</div>
					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>

<!-- Giới thiệu chung về Shop -->
		<section id="about-shop">
			<div class="container">
				<div class="row">

					<div class="about-header">
						<h2>SWEET CAKE </h2>
						<h6 class="about-description">
							Mang đến những chiếc bánh ngọt ngào là hạnh phúc của chúng tôi
						</h6>
					</div>

					<div class="about-content">
						<div class="about-logo">
							<img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/tiembanh.png" class="wow fadeInLeft animated animated" style="visibility: visible;">
						</div>
						<div class="about-slogan wow fadeInUp animated animated" style="visibility: visible;">
							<img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/typo-about.png">
							<p>Được tận hưởng cảm xúc thi vị của phố cổ, mà còn được thưởng thức hương vị Pháp ngay trong lòng Thủ Đô. Nằm trên con phố đông đúc và cổ kính, Bánh Ngọt Pháp Anh Hòa từ lâu đã trở thành điểm đến của những người yêu thích Bánh Ngọt Pháp</p>
						</div>
						


						<div class="about-list wow fadeInRight animated animated" style="visibility: visible;">
							<ul>
								<li class="skill">
									<div class="skill-count">
										<span class="icon">
											<img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/tick-icon.png">
										</span>
									</div>
									<h6>
										<a href="http://localhost:81/cakeshop/">BÁNH KEM</a>
									</h6>
									<p>
										Những mẫu bánh mới nhất trong năm nay do chính chúng tôi thiết kế.
									</p>
								</li>
								<li class="skill">
									<div class="skill-count">
										<span class="icon">
											<img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/tick-icon.png">
										</span>
									</div>
									<h6>
										<a href="http://localhost:81/cakeshop/">BÁNH NGỌT</a>
									</h6>
									<p>
										Những mẫu bánh mới nhất trong năm nay do chính chúng tôi thiết kế.
									</p>
								</li>
								<li class="skill">
									<div class="skill-count">
										<span class="icon">
											<img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/tick-icon.png">
										</span>
									</div>
									<h6>
										<a href="http://localhost:81/cakeshop/">BÁNH GATO</a>
									</h6>
									<p>
										Những mẫu bánh mới nhất trong năm nay do chính chúng tôi thiết kế.
									</p>
								</li>
								<li class="skill">
									<div class="skill-count">
										<span class="icon">
											<img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/tick-icon.png">
										</span>
									</div>
									<h6>
										<a href="http://localhost:81/cakeshop/">KINH NGHIỆM LÀM BÁNH</a>
									</h6>
									<p>
										Hướng dẫn và chia sẻ kinh nghiệm để tạo ra những sản phẩm tốt nhất.
									</p>
								</li>
							</ul>
						</div><!--End about list-->

						<div class="images-shop">
							<h5>
								<span>HÌNH ẢNH TIỆM BÁNH NGỌT NGÀO</span>
							</h5>
						</div>

					</div><!--End about-content-->

					<!--Slider hiển thị hình ảnh của shop-->
					<script type="text/javascript">
						$(document).ready(function(){
							function startSlider(){

								/*Cứ mỗi 3 giây thì margin left 500px (là chiều rộng của slide). càng margin thì càng lùi */
								interval = setInterval(function(){
									/*Mất 1 giây để kéo. người dùng có 2 giây để xem*/
									$('#slider ul').animate({ 'margin-left':"-=220"},1000,function(){
										/*Chuyên slide 1 ra ngay sau slide cuối*/
										$('#slider ul li:first').appendTo('#slider ul');
										/*Đặt lại margin để trừ */
										$('#slider ul').css('margin-left',0);
									});
								},3000);
							}
							function pauseSlider(){
								clearInterval(interval);
							}
							$('#slider ul').on('mouseenter',pauseSlider).on('mouseleave',startSlider);
							startSlider();
						});
					</script>

					<div id="slider" class="wow fadeInRight animated animated" style="visibility: visible;">
						<ul style="margin-left: 0px;">
							
							
							
							
							
							
						<li><img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/anhtiembanh_4.png"></li><li><img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/anhtiembanh_5.png"></li><li><img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/anhtiembanh_6.png"></li><li><img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/anhtiembanh_1.png"></li><li><img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/anhtiembanh_2.png"></li><li><img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/anhtiembanh_3.png"></li></ul>
					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>

<!--Thống kê trang web -->
		<section id="statistic-cake">
			<div class="container">
				<div class="row">

					<div class="statistic-content">
						<div class="statistic-wrapper  wow fadeInUp animated animated" style="visibility: visible;">
							<h2>8</h2>
							<h6 class="statistic-description">
								Khách hàng của chúng tôi
							</h6>
						</div>

						<div class="statistic-wrapper  wow fadeInUp animated animated" style="visibility: visible;">
							<h2>5</h2>
							<h6 class="statistic-description">
								Chi nhánh
							</h6>
						</div>
						<div class="statistic-wrapper  wow fadeInUp animated animated" style="visibility: visible;">
							<h2>9</h2>
							<h6 class="statistic-description">
								Số lượng bánh tiêu thụ hằng năm
							</h6>
						</div>
						<div class="statistic-wrapper  wow fadeInUp animated animated" style="visibility: visible;">
							<h2>20</h2>
							<h6 class="statistic-description">
								Thị trường các nước
							</h6>
						</div>


					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>

<!-- Mẫu bán chạy -->
		<section id="mostly-cake">
			<div class="container">
				<div class="row">

					<div class="mostly-cake-header">
						<h2>MẪU MỚI NHẤT</h2>
						<h6 class="mostly-cake-description">
							Những mẫu mới nhất được cửa hàng cập nhật.
						</h6>
					</div>


				
					<div class="mostly-cake-content wow fadeInLeft animated animated" style="visibility: visible;">


				<?php 
 					foreach ($products as $product) :
				?>
						<div class="mostly-wrapper">
							<div class="mostly-content">
								<div class="mostly-image">
									<a href="Controller/Frontend.php?action=product_detail&id=<?=$product['product_id']?>"><img src="public/images/<?=$product['image'] ?>"/></a>
								</div>
								<div class="info">
									<span class="name"><?=$product['product_name'] ?></span>
									<span class="price"><?=$product['price'] ?> đ</span>
								</div>
							</div>
						</div>

				<?php endforeach ?>
						
					
					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>


<!--Liên Hệ đặt bánh-->
		<section id="contact">
			<div class="container">
				<div class="row">

					<div class="contact-header">
						<h2>LIÊN HỆ ĐẶT BÁNH</h2>
						<h6 class="contact-description">
							Hãy gọi cho chúng tôi ngay để bạn có được những sản phẩm tốt nhất
						</h6>
						<span>Hotline: 01649.616.425</span>
					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>


<!-- Kinh Nghiệm làm bánh -->
		<section id="exp-cake">
			<div class="container">
				<div class="row">

					<div class="exp-cake-header">
						<h2>TIN TỨC CỬA HÀNG</h2>
						<h6 class="exp-cake-description">
							Những tin tức mới nhất của cửa hàng hướng dẫn cách làm bánh, các loại bánh mới, các chương trình khuyến mại.
						</h6>
					</div>
	
					<div class="exp-cake-content wow fadeInLeft" style="visibility: hidden; animation-name: none;">


						<div class="wrapper-content">
							<div class="feature-content">
								<div class="feature-image">
									<a href=""><img src="http://localhost:81/HOC_KY_5/cake_shop/public/images/6101_cakecherry.png"></a>
								</div>
								<h3><a href="">Cách làm bánh mì kẹp độc đáo</a></h3>
								<div class="feature-info">
									Đăng bởi <a>15</a> | 25/03/2017								</div>
								<p>Mì ramen thơm lừng được kẹp trong bánh mì sẽ là một món mới lạ miệng mà ngon tuyệt khiến bạn không thể nào bỏ qua đâu đấy! Cùng Scakeshop học cách làm bánh mì kẹp mì độc đáo này nhé!</p>
							</div>
						</div>


						<div class="wrapper-content">
							<div class="feature-content">
								<div class="feature-image">
									<a href=""><img src="public/images/cakeweet(1).png"></a>
								</div>
								<h3><a href="">Hướng dẫn làm bánh su kem tại nhà thật ngon</a></h3>
								<div class="feature-info">
									Đăng bởi <a>15</a> | 24/03/2017								</div>
								<p>Những chiếc bánh su nhân kem tươi truyền thống đã quá đơn điệu, thêm một chút hương vị độc đáo của sầu riêng vào sẽ mang đến một hương vị hoàn toàn mới cho những chiếc bánh đấy! Cùng Scake shop học cách làm bánh su kem nhân sầu riêng ngon tuyệt này nhé!
</p>
							</div>
						</div>


						

					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>


<!-- Dụng cụ làm bánh -->
		<section id="product-equipment">
			<div class="container">
				<div class="row">

					<div class="product-equipment-header">
						<h2>DỤNG CỤ LÀM BÁNH</h2>
						<h6 class="product-equipment-description">
							Chúng tôi cung cấp dụng cụ làm bánh được nhập khẩu từ các nước uy tín đã được chứng nhận và kiểm nghiệm an toàn.
						</h6>
					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>
<!-- Đăng kí nhận thông tin qua Email-->
		<section id="register-email">
			<div class="container">
				<div class="row">

					<div class="register-email-header">
						<h2 class="wow fadeInLeft" style="visibility: hidden; animation-name: none;">ĐĂNG KÝ NHẬN EMAIL</h2>
						<h6 class="register-email-description wow fadeInRight" style="visibility: hidden; animation-name: none;">
							Hãy nhập email của bạn vào bên dưới
						</h6>
					</div>
					<div class="register-email-form wow fadeInLeft" style="visibility: hidden; animation-name: none;">
						<form action="http://localhost:81/cakeshop/" method="post">
							<input type="email" name="" class="register-email-input" placeholder="Nhập email để nhận tin khuyến mãi">
							<input type="submit" name="submit" value="GỬI ĐI" class="register-email-submit">
						</form>
					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>


<!--Giới thiệu về feedback -->
		<section id="customer-feedback">
			<div class="container">
				<div class="row">

					<div class="feedback-header">
						<h2>Ý KIẾN KHÁCH HÀNG</h2>
						<h6 class="feedback-description">
							Chúng tôi luôn tôn trọng mọi ý kiến của khách hàng. Chúng tôi luôn luôn phát triển để mang lại dịch vụ tốt nhất cho khách hàng
						</h6>
					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>
		
		<!--Form gửi ý kiến phản hồi , FEEDBACK-->
		<section id="feedback">
			<div class="container">
				<div class="row">

					<div class="feedback-header">
						<h2>GỬI Ý KIẾN PHẢN HỒI CHO CHÚNG TÔI</h2>
						<h6 class="feedback-description">
							Để nhận được dịch vụ chăm sóc tốt nhất, bạn nên điền đầy đủ thông tin bên dưới và gửi cho chúng tôi.
						</h6>
					</div>
					<div class="feedback-form">
						<form action="http://localhost:81/cakeshop/feedback" method="POST">
							<div class="feedback-row wow fadeInLeft" style="visibility: hidden; animation-name: none;">
								<div class="feedback-name">
									<input type="text" name="name" placeholder="Họ tên" value="">
								</div>
								<div class="feedback-email">
									<input type="email" name="email" placeholder="Email" value="">
								</div>
								<div class="feedback-title">
									<input type="text" name="title" placeholder="Tiêu đề">
								</div>
							</div>

							<div class="feedback-content wow fadeInRight" style="visibility: hidden; animation-name: none;">
								<textarea class="feedback-write" name="content" placeholder="Lời nhắn"></textarea>
							</div>
							<button type="submit" name="feedback" class="feedback-submit wow fadeInLeft" style="visibility: hidden; animation-name: none;">Gửi phản hồi</button>
						</form>
					</div>
				</div><!--End row-->
			</div><!--End container -->
		</section><!--End Section Contact -->


<?php 
	include "Common/footer.php"
 ?>