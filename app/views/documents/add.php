<?php $this->setSiteTitle('เพิ่มรายการเอกสาร'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="card mb-3">
    <div class="card-header bg-success">
        <i class="fa fa-file-text"></i>
        <?= $this->siteTitle() ?>
    </div>
    <div class="card-body">
        <?php $this->partial('documents', 'frm_doc') ?>
    </div>
</div>
<?php $this->end(); ?>
