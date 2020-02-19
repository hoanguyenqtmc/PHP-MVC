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
  
<h4>Add User</h4>
<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="add_save">
    <input type="hidden" name="controller" value="<?= $controller ?>">
    <input type="hidden" name="role" value="0">
   
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password">
    </div>
        <div class="forn-group">
      <label for="fullname">Full Name</label>
      <input type="text" name="fullname" class="form-control">
    </div>
     <div>
      <input type="file" name="image" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary  " value="Add New">
    
</form>
</div>
</div>
<?php include "./Views/Common/footer.php" ?>