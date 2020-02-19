<?php include "./Views/Common/login.header.php" ?>



    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="?controller=UserController" class="btn btn-primary">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Login</h3>
                   
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="" id="loginForm" method="post">

                            <input type="hidden" name="action" value="login_process">
                            <input type="hidden" name="controller" value="UserController">

                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <?php if (isset($user ) && $user != null && count($user)>0): ?>
                                        <img src="images/<?= $user['avatar']?>"
                                             alt="" width="70" height="70"> <?= $user['email'] ?>
                                        <input type="hidden" name="name" value="<?= $user['name']?>">
                                    <?php else: ?>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="User Name">
                                    <?php endif; ?>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="checkbox col-lg-12 form-group">
                                    <input type="checkbox" class="i-checks" name="remember" id="remember" value="T">
                                    <label for="remember">Remember your password</label>
                                </div>
                               
                                <div class="signup form-group">
                                    <a href="register.html" style="margin-left: 15px"> Register new user</a>
                                </div>
                                <div class="forgot form-group">
                                    <a href="reset.html" style="margin-left: 15px ; margin-top: 0;"> Forgot password?</a>
                                </div>
                        

                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn" type="submit">Login</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                        <?php
                        if (isset($message)):
                            ?>
                            <div class="alert alert-primary" role="alert">
                                <?= $message ?>
                            </div>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
        </div>
    </div>

<?php include "./Views/Common/login.footer.php" ?>