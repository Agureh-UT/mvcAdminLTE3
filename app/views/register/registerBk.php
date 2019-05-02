<?php

use Core\FormHelper;
?>
<?php $this->setSiteTitle('Register > Register'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="row">
    <div class="col-xl-2 col-sm-6 mb-3"></div>
    <div class="col-xl-8 col-sm-6 mb-3">
        <div class="card">
            <div class="card bg-primary">
                <div class="card-header text-white">
                    <div class="card-body-icon">
                    </div>
                    <div class="mr-5"><strong>Register</strong></div>
                </div>
                <div class="card-body bg-white">
                    <form class="form" action="" method="post">
                        <?= FormHelper::csrfInput() ?>
                        <div><?= FormHelper::displayErrors($this->displayErrors) ?></div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-6 mb-3">
                                <?= FormHelper::inputBlock('text', 'FullName', 'full_name', $this->newUser->full_name, '',['class' => 'form-control'], ['class' => 'form-group']) ?>
                            </div>
                            <div class="col-xl-7 col-sm-6 mb-3">
                                <?= FormHelper::inputBlock('email', 'Email', 'email', $this->newUser->email, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
                            </div>
                            <div class="col-xl-5 col-sm-6 mb-3">
                                <?= FormHelper::inputBlock('text', 'UserName', 'user_name', $this->newUser->user_name, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
                            </div>
                            <div class="col-xl-6 col-sm-6 mb-3">
                                <?= FormHelper::inputBlock('password', 'Password', 'password', $this->newUser->password, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
                            </div>
                            <div class="col-xl-6 col-sm-6 mb-3">
                                <?= FormHelper::inputBlock('password', 'ConfirmPassword', 'confirm', $this->newUser->getConfirm(), '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <?= FormHelper::submitBlock('Register', ['class' => 'btn btn-block btn-primary'], ['class' => 'form-group']) ?>
                            </div>
                        </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-sm-6 mb-3"></div>
</div>

<?php $this->end(); ?>
