<?php

use Core\FormHelper;
?>
<?php $this->setSiteTitle('Register > Login'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>

    <div class="card card-login mx-auto">
        <div class="card bg-primary">
            <div class="card-header text-white">
                <div class="card-body-icon">
                </div>
                <div class="mr-5"><strong>Login!</strong></div>
            </div>
            <div class="card-body bg-white">
                <form class="form" action="" method="post">
                    <?= FormHelper::csrfInput() ?>
                    <div><?= FormHelper::displayErrors($this->displayErrors) ?></div>
                    <?= FormHelper::inputBlock('text', 'Username', 'username', $this->Login->username, ['class' => 'form-control'], ['class' => 'form-group']) ?>
                    <?= FormHelper::inputBlock('password', 'Password', 'password', $this->Login->password, ['class' => 'form-control'], ['class' => 'form-group']) ?>
                    <?= FormHelper::chechboxBlock('Remember Me', 'remember_me', $this->Login->getRememberMeChecked(), [], ['class' => 'form-group']) ?>
                    <?= FormHelper::submitBlock('Login', ['class' => 'btn btn-block btn-primary'], ['class' => 'form-group']) ?>
                </form>
            </div>
        </div>
    </div>
    <?php $this->end(); ?>

