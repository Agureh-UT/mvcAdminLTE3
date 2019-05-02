<?php

use Core\FormHelper;
?>
<?php $this->setSiteTitle('Register > Login'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="card card-login mx-auto mt-5">
    <div class="card">
        <div class="card bg-light">
            <div class="card-header bg-info">
                <div class="card-body-icon">
                </div>
                <div class="mr-5"><strong><i class="fa fa-key"></i> Login</strong></div>
            </div>
            <div class="card-body bg-white">
                <form class="form" action="" method="post">
                    <?= FormHelper::csrfInput() ?>
                    <div><?= FormHelper::displayErrors($this->displayErrors) ?></div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-6 mb-3">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="text" id="username" class="form-control" placeholder="Username" name="username" value="<?= $this->Login->username ?>">
                                    <label for="username"><i class="fas fa-user"></i> Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-6 mb-3">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="password" id="password" class="form-control" placeholder="Password" name="password" value="<?= $this->Login->password ?>">
                                    <label for="password"><i class="fas fa-key"></i> Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-6 mb-3">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember_me">
                                        Remember Me
                                    </label>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-xl-6 col-sm-6 mb-3">
                            <?= FormHelper::submitBlock('Login', ['class' => 'btn btn-block btn-info'], ['class' => 'form-group']) ?>
                        </div>
                        <div class="col-xl-6 col-sm-6 mb-3"></div>
                        <div>
                            <a href="<?= PROOT ?>register/register" class="btn btn-sm">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<?php $this->end(); ?>
