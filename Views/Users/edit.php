<?php include $_SERVER["DOCUMENT_ROOT"]. "/Views/Common/header.php" ?>
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
<a  class="btn btn-primary"
    href="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php' ?>">List Users</a>
<hr>
<form action="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php'?>" method="post">
    <input type="hidden" name="action" value="edit_save">
    <div class="form-group">
      <label for="id">User ID:</label>
      <input type="text" class="form-control" name="id" value="<?= !is_object($user)?$user['id'] : $user->Id ?>" readonly>
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" value="<?=!is_object($user)?$user['name'] : $user->Name ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="email" value="<?= !is_object($user)?$user['email'] : $user->Email  ?>">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password">
    </div>
    <input type="submit" class="btn btn-primary" value="Update">
</form>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/Views/Common/footer.php" ?>