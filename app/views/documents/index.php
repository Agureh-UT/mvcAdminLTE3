<?php $this->setSiteTitle('Documents'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="card mb-3">
    <div class="card-header bg-info">
        <i class="fa fa-file-text-o"></i>
        My Documents
    </div>
    <div class="card-body">
        <p><a href="<?= PROOT ?>documents/add" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> Add New</a></p>
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
                    <?php foreach ($this->documents as $document): ?>
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
            <?php
            \Core\Helper::page_navi($total, (isset($_GET['page'])) ? $_GET['page'] : 1, $e_page);
            ?>
        </div>
    </div>
</div>
</div>
<?php $this->end(); ?>
