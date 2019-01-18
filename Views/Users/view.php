<?php include "./Views/Common/header.php" ?>
    <div class="container">
        <div class="row">
            <h2>User Detail</h2>
        </div>
        <div class="row">


            <div>
                <div class=" col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                        <tbody>
                        <tr>
                            <td>Name:</td>
                            <td><?= $user['name'] ?></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><?= $user['email'] ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php include "./Views/Common/footer.php" ?>