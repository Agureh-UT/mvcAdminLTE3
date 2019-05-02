<?php $this->setSiteTitle('Add a new contact'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="card mb-3">
    <div class="card-header bg-success">
        <i class="fa fa-id-card"></i>
        Add a new contact
    </div>
    <div class="card-body">
        <?php $this->partial('contacts', 'form') ?>
    </div>
</div>
<?php $this->end(); ?>
