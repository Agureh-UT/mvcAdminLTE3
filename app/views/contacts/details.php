<?php $this->setSiteTitle($this->contact->displayName()); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="">
    <h1 class="text-center blue"><?= $this->contact->displayName() ?></h1>
    <hr>
</div>

<a href="<?= PROOT ?>contacts/index" class="btn btn-secondary btn-sm">Back</a>
<p>
    <div class="row well">
        <h2 class="text-center"></h2>
        <div class="col-md-6">
            <p><strong>Email : </strong><?= $this->contact->email ?></p>
            <p><strong>Ofiice : </strong><?= $this->contact->office ?></p>
            <p><strong>Cell Phone : </strong><?= $this->contact->cell_phone ?></p>
            <p><strong>Work Phone : </strong><?= $this->contact->work_phone ?></p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <?= $this->contact->displayAddress() ?>
        </div>
    </div>
</p>
<?php $this->end(); ?>