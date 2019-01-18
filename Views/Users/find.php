<?php include "./Views/Common/header.php" ?>
<div class="container">
<div>
<a  class="btn btn-primary"
    href="#?controller=UserController&action=add">Add New</a>
</div>
<hr>

<form action="" class="form-inline  mb-2">
  <input type="hidden" name="action" value="find">
  <div class="form-group">
    <label for="name" class="sr-only">Name</label>
    <input type="text" class="form-control mr-2" id="name" name="name" placeholder="Name">
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form>
<?php
if (isset($users) && count($users)>0):
?>

<table class="table table-hover">
  <thead class="thead-dark">
  <tr>
    <td>Name</td>
    <td>Email</td>
    <td>&nbsp;</td>
  </tr>
  </thead>
  <?php
  foreach ($users as $user) :
  ?>
  <tr>
    <td><?= $user['name'] ?></td>
    <td><?= $user['email'] ?></td>
    <td>
        <a href="?controller=UserController&action=view&id=<?= $user['id'] ?>"><span class="fa fa-file-alt mr-2"></span> View</a>
        | <a href="?controller=UserController&action=edit&id=<?= $user['id'] ?>"><span class="fa fa-edit mr-2"></span>Edit</a>
        | <a href="?controller=UserController&action=delete&id=<?= $user['id'] ?>"><span class="fa fa-trash mr-2"></span>Delete</a>
    </td>
  </tr>
  <?php
  endforeach;
  ?>
</table>
<?php
else:
?>
<div class="alert alert-primary" role="alert">
  No users has found
</div>
<?php
endif;
?>
</div>
<?php include "./Views/Common/footer.php" ?>