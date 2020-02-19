<?php include '../View/Common/header.php'; ?>
<div class="content">
    <!--Container content-->
    <div class="container">
        <!-- Row content -->
        <div class="row">
            <center style="width: 50%;margin:0 auto">
                <div class="form-info-user">
                    <form method="POST" action="Controller/OrderController.php">
                        <h3>Thông tin đặt hàng</h3>
                        <h4>Tên người dùng</h4>
                        <div class="form-group">
                            <input type="text" name="name" value="" class="form-control">
                        </div>
                        <h4>Email</h4>
                        <div class="form-group">
                            <input type="email" name="email" value="" class="form-control">
                        </div>
                        <h4>Số điện thoại</h4>
                        <div class="form-group">
                            <input type="text" name="telephone" value="" class="form-control">
                        </div>
                        <h4>Ghi chú</h4>
                        <div class="form-group">
                            <input type="text" name="note" value="" class="form-control">
                        </div>
                        
                            <input type="hidden" name="status" value="0" class="form-control">
                            <input type="hidden" value="<?php $dt = new DateTime(); echo $dt->format('Y-m-d H:i:s');?>" name="created_at">
                    
                        <h4>Giá order</h4>
                        <div class="form-group">
                            <input type="text" readonly name="price_order" value="<?=$_SESSION["tong"]?>" class="form-control">
                        </div>
                        <input type="hidden" name="action" value="order_add">
                        <input type="submit" name="order_add" class="submit-buy" value="Gửi đơn hàng">
                        <!-- <a href="Controller/OrderController.php?action=order_add">Gửi đơn hàng</a> -->
                    </form>
                </div>
            </center>
            <h2 class="cart-name">GIỎ HÀNG</h2>
            <div class="form-cart">
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng (đã sale)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION["cart"] as $key => $value) : ?>
                            <?php $sum1 =  (($value["price"] * $value["qty"]) * (100-$value["sale"]) / 100);
                            
                            ?>
                        <tr class="cart-item-1">
                            <td><?= $value["product_name"] ?></td>
                            <td><?= $value["product_name"] ?></td>
                            <td class="price-item"><?= number_format($value["price"]) ?> đ</td>
                            <td class="number-item"><?= $value["qty"] ?></td>
                            <td class="total-item-price"><?= number_format($sum1)   ?> đ</td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div style="padding-top:20px">
                    <span class="cart-total">Tổng đơn hàng: <?= number_format($_SESSION["tong"]) ?> đ</span>
                </div>
            </div>
        </div>
        <!--End Row-->
    </div>
    <!--End container -->
</div>



<?php include '../View/Common/footer.php'; ?>