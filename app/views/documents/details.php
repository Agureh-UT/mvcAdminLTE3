<?php $this->setSiteTitle($this->document->doc_title); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="card mb-3">
    <div class="card-header bg-info">
        <i class="fa fa-file-text-o"></i>
        Document: <?= $this->document->doc_title ?>
    </div>
    <div class="card-body">
        <div style="padding-bottom: 10px"><a href="<?= PROOT ?>documents/index" class="btn btn-default">Back</a></div>
        <div class="">
            <?php
            //\Core\Helper::dnd($this->document);
            ?>
            <p><strong>Title : </strong><?= $this->document->doc_title ?></p>
            <p><strong>Owner : </strong><?= $this->document->fname .' '.$this->document->lname?></p>
            <p><strong>Category : </strong><?= $this->document->doc_type ?></p>
            <p><strong>Recorder : </strong><?= $this->document->full_name ?></p>
            <p><strong>Copy : </strong>
                <a href="<?= PROOT . 'uploads/' . $this->document->type_id . '/' . $this->document->doc_copy ?>" target="_blank">
                    <?= $this->document->doc_copy ?>
                </a>
            </p>
        </div>
    </div>

    <?php $this->end(); ?>
