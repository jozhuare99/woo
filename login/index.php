<?php
define('TITLE', 'Login');
require '/woo/assets/header.php';
check_logged_out();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">  </div>
        <div class="col-sm-4">
            <form class="form-auth" action="/login/login_act/login_action.php" method="POST">
                <?php insert_csrf_token(); ?>
                <div class="text-center ">
                    <img class="  my-sm-4 " src="/assets/images/login.png" alt="" width="100" height="100">

                    <h6 class="h3 my-3 font-weight-normal text-muted text-center">Login</h6>

                    <div class="input-group mb-3">
                        <small class="text-success font-weight-bold">
                            <?php
                                if(isset($_SESSION['STATUS']['loginstatus']))
                                echo $_SESSION['STATUS']['loginstatus'] 
                            ?>
                        </small>
                    </div>
                    <div class="input-group mb-3">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                        <sub class="text-danger">
                            <?php
                                if(isset($_SESSION['ERRORS']['nouser']))
                                echo $_SESSION['ERRORS']['nouser'];
                            ?>
                        </sub>
                    </div>

                    <div class="input-group mb-3">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="form-control " placeholder="Password" required>
                        <sub class="text-danger">
                            <?php
                                if(isset($_SESSION['ERRORS']['wrongpassword']))
                                echo $_SESSION['ERRORS']['wrongpassword'];
                            ?>
                        </sub>
                    </div>

                    <div class="mb-4 col-auto custom-checkbox mr-sm-2" >
                        <input type="checkbox" name="rememberme" id="rememberme" class="custom-control-input ">
                        <label for="rememberme" class="custom-control-label">REMEBER ME</label>
                    </div>

                <button type="submit" class="btn btn-lg btn-primary w-100" value="loginsubmit" name="loginsubmit">Login</button>
                </div>
                <p class="mt-3 text-muted text-center"><a href="/reset/">forgot password?</a></p>
            </form>
        </div>
        <div class="col-sm-4">        </div>
    </div>
</div>

<?php require '/woo/login/loginFooter.php';?>