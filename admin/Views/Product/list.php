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
                <h4>Products List</h4>
                <div class="add-product">
                    <a href="?controller=ProductController&action=add">Add Product</a>
                </div>
                <table>
                    <tbody><tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Special</th>
                        <th>Price</th>
                        <th>Sale</th>
                        <th>Quantity</th>
                        <th>Setting</th>
                    </tr>
                    
  <?php
  foreach ($products as $product) :
  ?>
                    <tr>
                        <td><?= $product['product_id'] ?></td>
                        <td> <img  src="images/<?= $product['image'] ?>" alt=""></td>
                        <td><?= $product['product_name'] ?></td>
                        <td>
                            <button class="ps-setting"><?= $product['special'] ?></button>
                        </td>
                        <td><?= $product['price'] ?> <u>đ</u></td>
                        <td><?= $product['sale'] ?> <u>đ</u></td>
                        <td><?= $product['quantity'] ?></td>
                        <td>
                            <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="View"><a href="?controller=ProductController&action=view&id=<?= $product['product_id'] ?>"><i class="far fa-eye"></i></a></button>
                            
                            <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Edit"><a href="?controller=ProductController&action=edit&id=<?= $product['product_id'] ?>"><i class="fas fa-edit"></i></a></button>
                            <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Trash"><a href="?controller=ProductController&action=delete&id=<?= $product['product_id'] ?>"><i class="far fa-trash-alt"></i></a></button>
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