<?php 
	include 'Common/header.php';
 ?>
</header><!--Content -->
<div class="content">
	<!--Container content-->
	<div class="container">
		<!-- Row content -->
		<div class="row">
			<h1 class="contact-page-title">LIÊN HỆ</h1>
			<div class="contact-col-1 wow fadeInLeft">
				<form action="http://localhost:81/HOC_KY_5/cake_shop/Controller/Frontend.php?action=contact" method="post">
					<div class="contact-page-feedback-name"><input type="text" name="name" placeholder="Tên" value=""></div>
					<div class="contact-page-feedback-email"><input name="email" type="email" placeholder="Email" value=""></div>
					<div class="contact-page-feedback-title"><input name="subject" type="text" placeholder="Tiêu đề"></div>
					<div class="contact-page-feedback-content"><input name="body" type="text" placeholder="Lời nhắn"></div>
					<button type="submit" name="submit" class="contact-page-feedback-submit">Gửi</button>
				</form>
			</div>
			<div class="contact-col-2 wow fadeInLeft">
				<h3 class="contact-info-title">Thông tin liên hệ</h3>
				<p>Cao Đẵng thực hành FPT Polytechnic Đà Nẵng </p>
				<p>Số điện thoại: 09817401210</p>
				<p>Email:trandinhdat120@gmail.com</p>
			</div>
			<div class="contact-col-3 wow fadeInLeft">
				<h3 class="contact-about-title wow fadeInLeft">Về chúng tôi</h3>
				<p>
					Đắm mình trong không gian cổ kính của Hà Nội, bạn không những được tận hưởng cảm xúc thi vị của phố cổ, mà còn được thưởng thức hương vị Pháp ngay trong lòng Thủ Đô.
					Nằm trên con phố đông đúc và cổ kính, Bánh Ngọt Pháp Anh Hòa từ lâu đã trở thành điểm đến của những người yêu thích Bánh Ngọt Pháp. Với niềm đam mê về chất Pháp, Bánh Ngọt Pháp Anh Hòa đã mang hương vị pháp “nguyên chất” đến với những thực khách Việt Nam.
					Bánh Ngọt Pháp Anh Hòa là một thương hiệu nổi tiếng cho những ai yêu thích văn hóa ẩm thực Pháp. Nằm trên cái “chất” của Hà Nội, chất phố cổ, chất của người tìm về cội nguồn văn hóa, du khách sẽ bắt gặp Bánh Ngọt Pháp Anh Hòa tại Số 8 Ngõ Trạm, Hà Nội...       
				</p>
			</div>
		</div><!--End Row-->
	</div><!--End container -->
</div><!--End content-->

 <?php 
	include 'Common/footer.php';
 ?>