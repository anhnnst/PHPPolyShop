<?php include $_SERVER["DOCUMENT_ROOT"]. "/Views/Common/header.php" ?>
<div class="container">
<div>
<a  class="btn btn-primary"
    href="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php?action=add' ?>">Add New</a>
</div>
<hr>

<form action="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php'?>" class="form-inline  mb-2">
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
      <a href="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php?action=view&id='. $user['id'] ?>">View</a>
      <a href="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php?action=edit&id='. $user['id'] ?>">Edit</a>
      <a href="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php?action=delete&id='. $user['id'] ?>">Delete</a>
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
<?php include $_SERVER["DOCUMENT_ROOT"] . "/Views/Common/footer.php" ?>