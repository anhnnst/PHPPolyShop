<?php include "./Views/Common/login.header.php" ?>
<div class="container">
    <h1 class="form-heading">Poly Shop</h1>
    <div class="login-form">
    <div class="main-div">
        <div class="panel">
            <h2>Admin Login</h2>
            <p>Please enter your user id and password</p>
            </div>
                <form id="Login" action="index.php" method="post">
                    <input type="hidden" name="action" value="login_process">
                    <input type="hidden" name="controller" value="UserController">
                    <div class="form-group">
                        <input type="text" class="form-control" id="id" name="id" placeholder="User ID">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="signup">
                        <a href="register.html">Register new user</a>
                    </div>
                    <div class="forgot">
                        <a href="reset.html">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "./Views/Common/login.footer.php" ?>