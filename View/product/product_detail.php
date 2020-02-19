<!--Content -->
<div class="content">
    <!--Container content-->
    <div class="container">
        <!-- Row content -->
        <div class="row">
            <div class="body-left">
                <h2 class="title-category">DANH MỤC SẢN PHẨM</h2>
                <ul class="list-category wow fadeInLeft">
                    <h3><a href="product/list_all/3" title="Bánh gato">
                            <li class="list-cat-menu">Bánh gato</li>
                        </a></h3>
                    <h3><a href="product/list_all/2" title="Bánh ngọt">
                            <li class="list-cat-menu">Bánh ngọt</li>
                        </a></h3>
                    <h3><a href="product/list_all/1" title="Bánh kem">
                            <li class="list-cat-menu">Bánh kem</li>
                        </a></h3>
                </ul>
            </div>
            <div class="body-right">
                <div class="heading-view wow fadeInLeft">
                    <div class="image-view wow fadeInLeft">
                        <img src="public/images/<?=$product['image'];?>">
                    </div>
                    <div class="meta-view">
                        <h2><?= $product['product_name']; ?></h2>
                        <h3><?= $product['price']; ?> đ</h3>
                        <p>Trứng được ăn hàng ngày. Nó có mặt khắp nơi, từ các nhà hàng sang trọng cho đến những hàng ăn bình dân hay tại nhà. Trứng đúc khoai tây, ăn nguội hay để lạnh là món phổ biến. Khách hàng lựa chọn 1 trong 5 mẫu Cupcake xinh xắn tại Afamily Cake (cụ thể hình ảnh và tên từng loại xem chi tiết), 1 set bao...</p>
                        <form method="POST" action="cart">
                            <input type="hidden" name="id" value="10">
                            <input type="hidden" name="name" value="Mứt kem">
                            <input type="hidden" name="price" value="30000">
                            <input type="hidden" name="number" value="1">
                            <a href="Controller/Frontend.php?action=addcart&id=<?=$product['product_id']?>">Đặt hàng</a>
                            </form>
                    </div>
                </div>
                <div class="content-view-title wow fadeInLeft">
                    <span>XEM CHI TIẾT SẢN PHẨM</span>
                </div>
                <div class="content-view wow fadeInLeft">
                    <p><?=$product['detail']?></p>
                </div>
                <div class="comment-product">
                    <div class="well">
                        <h4>Viết bình luận ...</h4>
                        <div class="none-form-comment" style="padding-top:10px;">
                            Bạn cần <a href="View/login.php">Đăng nhập</a> để bình luận
                        </div>
                        <div class="all-comment">
                            <div class="comment-item">
                                <div class="media-avatar">
                                    <span>r</span>
                                </div>
                                <div class="media">
                                    <div class="media-heading">root Ngày đăng: 2017-05-06</div>
                                    <div class="media-body">
                                        <p>lam tot lam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="media-avatar">
                                    <span>r</span>
                                </div>
                                <div class="media">
                                    <div class="media-heading">root Ngày đăng: 2017-05-06</div>
                                    <div class="media-body">
                                        <p>dep lam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End container -->
    </div>
    <!--End content-->
