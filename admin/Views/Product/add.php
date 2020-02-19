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
    <div class="product-status-wrap">
        <h4>Add Product</h4>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="add_save">
            <input type="hidden" name="controller" value="<?= $controller ?>">
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="number">Price:</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="text">Sale:</label>
                <input type="text" class="form-control" name="sale">
            </div>
            <div class="forn-group">
                <label for="date">Date Create:</label>
                
                <input type="text" class="form-control" name="date" value="<?php $dt = new DateTime(); echo $dt->format('Y-m-d H:i:s');?>">
            </div>
            <div>
                <input type="file" name="image" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary  " value="Add New">
        </form>
    </div>
</div>
<?php include "./Views/Common/footer.php" ?>