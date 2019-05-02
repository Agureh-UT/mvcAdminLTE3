<?php use Core\FormHelper; ?>
<?php $this->setSiteTitle('Contacts > Edit'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<?php
?>
<div class="card mb-3">
    <div class="card-header bg-success">
        <i class="fas fa-file-alt fa-2x"></i>
        Contact Editing : <span class="text-danger"><?=$this->contact->fname.' '.$this->contact->lname?></span>
    </div>
    <div class="card-body">
        <?php $this->partial('contacts', 'form') ?>
    </div>
</div>
<?php $this->end(); ?>
