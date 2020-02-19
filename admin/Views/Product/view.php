<?php include "./Views/Common/header.php" ?>
    <div class="container">
        <div class="row product-status-wrap">
            <h2>Product Detail</h2>
        </div>
        <div class="row row product-status-wrap">


            <div>
                <div class=" col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                        <tbody>
                        <tr>
                            <td>Product Name:</td>
                            <td><?= $product['product_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Detail:</td>
                            <td><?= $product['detail'] ?></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        
<?php include "./Views/Common/footer.php" ?>
<!--     <td>ProductId</td>
    <td>Name</td>
    <td>Price</td>
    <td>Sale</td>
    <td>Image</td>
    <td>Date</td>
    <td>Detail</td>
    <td>Special</td>
    <td>Type_id</td>
    <td>Quantity</td> -->