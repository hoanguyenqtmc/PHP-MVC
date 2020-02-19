<?php include "./Views/Common/header.php" ?>
<div class="container">
<?php
if (isset($message)):
?>
<div class="alert alert-primary" role="alert">
  <?= $message ?>
</div>
<?php
endif;
?>




 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
                <h4>View detail</h4>
                <div class="add-product">
                    <a href="?controller=ProductController&action=add">Add Product</a>
                </div>
                <table>
                    <tbody><tr>
                        <th>Order Id</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Sale</th>
   
                    </tr>
                    
  <?php
  foreach ($order as $value) :
  ?>
                    <tr>
                        <td><?= $value['order_id'] ?></td>
                        <td><?= $value['product_name'] ?></td>
                        <td><?= $value['price'] ?> </td>
                        <td><?= $value['quantity'] ?> </td>
                        <td><?= $value['sale'] ?></td>
                         
                    </tr>
  <?php
    endforeach;
  ?>
                </tbody></table>
                <div class="custom-pagination">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
<?php include "./Views/Common/footer.php" ?>