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
          <div class="card-header">
              <div class="card-body-icon">
              </div>
              <div class="mr-5"><strong>Login</strong></div>
          </div>
          <div class="card-body bg-white">
              <form class="form" action="" method="post">

                  <?= FormHelper::csrfInput() ?>
                  <div><?= FormHelper::displayErrors($this->displayErrors) ?></div>
                  <div class="row">
                    <div class="col-xl-12 col-sm-6 mb-3">
                      <?= FormHelper::inputBlock('text', 'Username', 'username',$this->Login->username,['class'=>'form-control'], ['class'=>'form-group']) ?>
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-3">
                      <?= FormHelper::inputBlock('password', 'Password', 'password',$this->Login->password,['class'=>'form-control'], ['class'=>'form-group']) ?>
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-3">
                      <?= FormHelper::chechboxBlock('Remember Me', 'remember_me', $this->Login->getRememberMeChecked(),[],['class'=>'form-group'])?>
                    </div>
                    <div class="col-xl-6 col-sm-6 mb-3">
                      <?= FormHelper::submitBlock('Login', ['class'=>'btn btn-block btn-info'], ['class'=>'form-group']) ?>
                    </div>
                    <div class="col-xl-6 col-sm-6 mb-3"></div>
                    <div>
                      <a href="<?=PROOT?>register/register" class="btn btn-sm">Register</a>
                    </div>
                  </div>
              </form>
            </div>
      </div>
  </div>

</div>
<?php $this->end(); ?>
