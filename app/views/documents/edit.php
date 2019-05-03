<?php use Core\FormHelper; ?>
<?php $this->setSiteTitle('Documents > Edit'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="card mb-3">
    <div class="card-header bg-success">
        <i class="fas fa-file-alt"></i>
        Document Editing : <span class="text-danger"><?=$this->document->doc_title?></span>
    </div>
    <div class="card-body">
        <?php $this->partial('documents', 'frm_doc') ?>
    </div>
</div>
<?php $this->end(); ?>
