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
<form action="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php'?>" method="post">
    <input type="hidden" name="action" value="add_save">
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
    <input type="submit" class="btn btn-primary" value="Add New">
</form>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/Views/Common/footer.php" ?>