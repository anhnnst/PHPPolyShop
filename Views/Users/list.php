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
<div>
<a  class="btn btn-primary"
    href="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php?action=add' ?>">Add New</a>
</div>
<hr>
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
      <a href="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php?action=view&id='. $user['id'] ?>"><span class="fa fa-file-alt mr-2"></span> View</a>
      | <a href="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php?action=edit&id='. $user['id'] ?>"><span class="fa fa-edit mr-2"></span>Edit</a>
      | <a href="<?= UrlUtil::getBaseUrl() . '/Controllers/UserController.php?action=delete&id='. $user['id'] ?>"><span class="fa fa-trash mr-2"></span>Delete</a>
    </td>
  </tr>
  <?php
  endforeach;
  ?>
</table>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/Views/Common/footer.php" ?>