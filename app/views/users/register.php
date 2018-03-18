<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card mt-5">
                <div class="card-body bg-light">
                    <h4>Create Account</h4>
                    <p>Please fill out the form to register to SharePost</p>
                    <form action="<?php echo URLROOT; ?>/users/register" method="POST">
                        <div class="form-group">
                            <label for="name">Name <sup>*</sup></label>
                            <input
                                    type="text"
                                    name="name"
                                    class="form-control from-control-lg <?php echo (!empty($data['name_error'])) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $data['name']; ?>"
                            >
                            <span class="invalid-feedback"><?php echo $data['name_error']; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email <sup>*</sup></label>
                            <input
                                    type="email"
                                    name="email"
                                    class="form-control from-control-lg <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $data['email']; ?>"
                            >
                            <span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password <sup>*</sup></label>
                            <input
                                    type="password"
                                    name="password"
                                    class="form-control from-control-lg <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $data['password']; ?>"
                            >
                            <span class="invalid-feedback"><?php echo $data['password_error']; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password <sup>*</sup></label>
                            <input
                                    type="password"
                                    name="confirm_password"
                                    class="form-control from-control-lg <?php echo (!empty($data['confirm_password_error'])) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $data['confirm_password']; ?>"
                            >
                            <span class="invalid-feedback"><?php echo $data['confirm_password_error']; ?></span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-success btn-block" value="Register">
                            </div>
                            <div class="col">
                                <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">
                                    Already Registered? Login
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>