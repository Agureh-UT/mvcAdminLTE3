<?php

use Core\FormHelper; ?>
<form class="form" action="<?= $this->postAction ?>" method="post">
    <?= FormHelper::csrfInput() ?>
    <div class=""><?= FormHelper::displayErrors($this->displayErrors) ?></div>
    <div class="row">
        <div class="form-group col-xl-4 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'ชื่อ', 'fname', $this->contact->fname, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-4 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'สกุล', 'lname', $this->contact->lname, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-4 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('email', 'อีเมล์', 'email', $this->contact->email, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-3 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'ที่อยู่', 'address', $this->contact->address, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-3 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'ตำบล', 'address2', $this->contact->address2, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-2 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'อำเภอ', 'city', $this->contact->city, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-2 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'จังหวัด', 'state', $this->contact->state, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-2 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'รหัสไปรษณีย์', 'zip', $this->contact->zip, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-6 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'หน่วยงาน', 'office', $this->contact->office, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-2 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'เบอร์มือถือ', 'cell_phone', $this->contact->cell_phone, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>
        <div class="form-group col-xl-2 col-sm-6 mb-3">
            <?= FormHelper::inputBlock('text', 'เบอร์ทำงาน', 'work_phone', $this->contact->work_phone, '', ['class' => 'form-control'], ['class' => 'form-group']) ?>
        </div>

        <div class="form-group col-xl-12 col-sm-6 mb-3">
            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> บันทึก</button>
            <a href="<?= PROOT ?>contacts" class="btn btn-warning btn-sm"><i class="fa fa-window-close"></i> ยกเลิก</a>
        </div>
    </div>
</form>