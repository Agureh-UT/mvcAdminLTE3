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
        <div style="padding-bottom: 10px"><a href="<?= PROOT ?>documents/index" class="btn btn-warning btn-sm">ย้อนกลับ</a></div>
        <div class="">
            <?php
            //\Core\Helper::dnd($this->document);
            ?>
            <p><strong>ชื่อเอกสาร : </strong><?= $this->document->doc_title ?></p>
            <p><strong>เจ้าของ : </strong><?= $this->document->fname .' '.$this->document->lname?></p>
            <p><strong>ประเภท : </strong><?= $this->document->doc_type ?></p>
            <p><strong>ผู้บันทึก : </strong><?= $this->document->full_name ?></p>
            <p><strong>สำเนาเอกสาร : </strong>
                <a href="<?= PROOT . 'uploads/' . $this->document->type_id . '/' . $this->document->doc_copy ?>" target="_blank" title="ดาวน์โหลด">
                    <?= $this->document->doc_copy ?>
                </a>
            </p>
        </div>
    </div>

    <?php $this->end(); ?>
