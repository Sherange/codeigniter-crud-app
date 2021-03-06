<section>
    <div class="banner-wrapper">
        <h1>
            User Login
        </h1>
    </div>
</section>
<section>
    <div class="login-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <?php echo validation_errors(
                        '<div class="container">
                            <div class="alert alert-dismissible alert-danger">
                                <button type="button" class="close" data-dismiss="alert">'.'&times;'.'</button>
                                    <strong>',
                            '</div>
                        </div>'); ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="user_name">User Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="user_name" name="user_name">
                        </div>
                        <div class="form-group">
                            <label for="password">Password
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-info" name="login">Login</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>