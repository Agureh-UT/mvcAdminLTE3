<?php

use Core\FormHelper; ?>
<form class="form" action="<?= $this->postAction ?>" method="post">
<?= FormHelper::csrfInput() ?>
    <div class=""><?= FormHelper::displayErrors($this->displayErrors) ?></div>
    <div class="row">
        <div class="form-group col-xl-4 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'Firstname', 'fname', $this->contact->fname, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-4 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'Lastname', 'lname', $this->contact->lname, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-4 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('email', 'Email', 'email', $this->contact->email, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-3 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'Address', 'address', $this->contact->address, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-3 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'Address2', 'address2', $this->contact->address2, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-2 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'City', 'city', $this->contact->city, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-2 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'State', 'state', $this->contact->state, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-2 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'Zipcode', 'zip', $this->contact->zip, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-2 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'Home Phone', 'home_phone', $this->contact->home_phone, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-2 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'Cell Phone', 'cell_phone', $this->contact->cell_phone, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-2 col-sm-6 mb-3">
<?= FormHelper::inputBlock('text', 'Work Phone', 'work_phone', $this->contact->work_phone, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>

        <div class="form-group col-xl-12 col-sm-6 mb-3">
            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Save</button>
            <a href="<?= PROOT ?>contacts" class="btn btn-warning btn-sm"><i class="fa fa-window-close"></i> Cancel</a>
        </div>
    </div>
</form>
