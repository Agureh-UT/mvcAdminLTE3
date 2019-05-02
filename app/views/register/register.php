<?php

use Core\FormHelper;
?>
<?php $this->setSiteTitle('Register > Register'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>JN</b>App</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>
            <form class="form" action="" method="post">
                <?= FormHelper::csrfInput() ?>
                <div><?= FormHelper::displayErrors($this->displayErrors) ?></div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full name" value="<?= $this->newUser->full_name ?>">
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $this->newUser->email?>">
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Username" value="<?= $this->newUser->user_name?>">
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= $this->newUser->password?>">
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm password" value="<?= $this->newUser->getConfirm()?>">
                </div>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="<?= PROOT ?>register/login" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>

<?php $this->end(); ?>
