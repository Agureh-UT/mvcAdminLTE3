<?php $this->setSiteTitle($this->contact->displayName()); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-6 col-md-offset-3">
  <h1 class="text-center blue">รายละเอียดของ <?=$this->contact->fname?></h1><hr>
</div>
<div class="col-md-6 col-md-offset-3 well">
    <a href="<?= PROOT ?>contacts" class="btn btn-default">Back</a>
    <h2 class="text-center"><?= $this->contact->displayName() ?></h2>
    <div class="col-md-6">
        <p><strong>Email : </strong><?= $this->contact->email ?></p>
        <p><strong>Cell Phone : </strong><?= $this->contact->cell_phone ?></p>
        <p><strong>Home Phone : </strong><?= $this->contact->home_phone ?></p>
        <p><strong>Work Phone : </strong><?= $this->contact->work_phone ?></p>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <?= $this->contact->displayAddress() ?>
    </div>
</div>
<?php $this->end(); ?>
