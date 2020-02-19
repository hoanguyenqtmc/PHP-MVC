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
                <h4>Order List</h4>
                <div class="add-product">
                    <a href="?controller=ProductController&action=add">Add Product</a>
                </div>
                <table>
                    <tbody><tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Create At</th>
                        <th>Price Order</th>
                        <th>Status</th>
                        <th>Note</th>
                    </tr>
                    
  <?php
  foreach ($orders as $order) :
  ?>
                    <tr>
                        <td><?= $order['id'] ?></td>
                        <td><?= $order['name'] ?></td>
                        <td><?= $order['email'] ?> </td>
                        <td><?= $order['telephone'] ?> </td>
                        <td><?= $order['created_at'] ?></td>
                        <td><?= $order['price_order'] ?></td>
                         <td>
                            <button class="pd-setting">
                            	<?php if($order['status'] == 1) {
                            		echo "Đang xử lý";
                            	} else {
                            		echo "Đã thanh toán";
                            	}?>
                            		
                            </button>
                        </td>
                        <td><?= $order['note'] ?></td>
                        <td>
                            <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="View"><a href="?controller=orderController&action=detail&id=<?= $order['id'] ?>"><i class="far fa-eye"></i></a></button>
                            
                            
                            <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Trash"><a href="?controller=orderController&action=delete&id=<?= $order['id'] ?>"><i class="far fa-trash-alt"></i></a></button>
                        </td>
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