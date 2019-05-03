<?php

use App\Models\DocType;
use App\Models\DocOwner;
use Core\FormHelper;
use Core\Helper;

?>
<form class="form" action="<?= $this->postAction ?>" method="post" enctype="multipart/form-data">
    <?= FormHelper::csrfInput() ?>
    <div class=""><?= FormHelper::displayErrors($this->displayErrors) ?></div>
    <div class="row">
        <?= FormHelper::inputBlock('text', 'ชื่อเอกสาร', 'doc_title', $this->document->doc_title, '', ['class' => 'form-control'], ['class' => 'form-group col-xl-12 col-sm-6 mb-3']) ?>
        <div class="form-group col-md-4">
            <label for="doc_type">ประเภท</label>
            <select class="form-control" id="doc_type" name="doc_type">
                <option value="">--- เลือกประเภทเอกสาร ---</option>
                <?php
                $docTypes = new DocType();
                foreach ($docTypes->findAll() as $docs) :
                    if ($this->document->doc_type == $docs->id) :
                        ?>
                        <option value="<?= $docs->id; ?>" selected><?= $docs->doc_type ?></option>
                    <?php else : ?>
                        <option value="<?= $docs->id; ?>"><?= $docs->doc_type ?></option>
                    <?php
                endif;
            endforeach;
            ?>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="doc_own">เจ้าของ</label>
            <select class="form-control" id="doc_own" name="doc_own">
                <option value="">--- เลือกเจ้าของเอกสาร ---</option>
                <?php
                $owner = new DocOwner();
                foreach ($owner->findAll() as $own) :
                    if ($this->document->doc_own == $own->id) :
                        ?>
                        <option value="<?= $own->id; ?>" selected><?= $own->fname ?></option>
                    <?php else : ?>
                        <option value="<?= $own->id; ?>"><?= $own->fname ?></option>
                    <?php
                endif;
            endforeach;
            ?>
            </select>
        </div>
        <div class="row col-md-4">
            <?= FormHelper::inputBlock('file', 'สำเนา', 'doc_copy', $this->document->doc_copy, '', [], ['class' => 'col-xl-6 col-sm-6 mb-3']) ?>
        </div>
        <div class="help-block"></div>

        <div class="form-group col-xl-12 col-sm-6 mb-3">
            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> บันทึก</button>
            <a href="<?= PROOT ?>documents<?= Helper::backPage(@$_GET['page'], ceil(Helper::getRowsDoc() / LIMIT)) ?>" class="btn btn-warning btn-sm"><i class="fa fa-window-close"></i> ยกเลิก</a>
        </div>
        <input type="hidden" name="page" value="<?= $_GET['page'] ?>">
    </div>
</form>
<?php if (empty($this->document->id)) : ?>
    <hr>
    <div>
        <h3 class="text-danger">เอกสารที่เพิ่ม 3 ครั้งล่าสุด</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>เอกสาร</th>
                    <th>ประเภท</th>
                    <th>เอกสารของ</th>
                    <th>สำเนา</th>
                    <th>การจัดการ</th>
                </tr>
            </thead>
            <!--
                                                            <tfoot>
                                                                <tr>
                                                                    <th>เอกสาร</th>
                                                                    <th>ประเภท</th>
                                                                    <th>สำเนา</th>
                                                                    <th>การจัดการ</th>
                                                                </tr>
                                                            </tfoot>
                                                            -->
            <tbody>
                <?php foreach ($this->documents as $document) : ?>
                    <tr>
                        <td>
                            <a href="<?= PROOT ?>documents/details/<?= $document->id ?>">
                                <?= $document->doc_title ?>
                            </a>
                        </td>
                        <td><?= $document->doc_type ?></td>
                        <td><?= $document->fname ?></td>
                        <td>
                            <a href="<?= PROOT . 'uploads/' . $document->type_id . '/' . $document->doc_copy ?>" target="_blank">
                                <?= $document->doc_copy ?>
                            </a>
                        </td>
                        <td><a href="<?= PROOT ?>documents/edit/<?= $document->id ?>" class="btn btn-warning btn-sm">
                                <i class="fa fa-pencil-square-o"></i> แก้ไข
                            </a>
                            <a href="<?= PROOT ?>documents/delete/<?= $document->id ?>" class="btn btn-danger btn-sm" onclick="if (!confirm('Are you sure?')) {
                                                                                                                                        return false;
                                                                                                                                    }">
                                <i class="fa fa-trash-o"></i> ลบ
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
<?php endif;
