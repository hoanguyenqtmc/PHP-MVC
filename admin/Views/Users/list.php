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
                    <a href="?controller=UserController&action=add">Add User</a>
                </div>
                <table>
                    <tbody><tr>
                        <th>Id</th>
                        <th>Avatar</th>
                        <th>User Name</th>
                        <th>Full Name</th>
                        <th>Role</th>
                        <th>Setting</th>
                    </tr>
                    
  <?php
  foreach ($users as $user) :
  ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td> <img  src="images/<?= $user['avatar'] ?>" alt=""></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['fullname'] ?></td>
                        <td>
                            <button class="ps-setting"><?= $user['role'] ?></button>
                        </td>
                        <td>
                            <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="View"><a href="?controller=UserController&action=view&id=<?= $user['id'] ?>"><i class="far fa-eye"></i></a></button>
                            
                            <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Edit"><a href="?controller=UserController&action=edit&id=<?= $user['id'] ?>"><i class="fas fa-edit"></i></a></button>
                            <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Trash"><a href="?controller=UserController&action=delete&id=<?= $user['id'] ?>"><i class="far fa-trash-alt"></i></a></button>
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
