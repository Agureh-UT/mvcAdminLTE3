<?php $this->setSiteTitle('Documents'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<?php

use Core\Helper;
use App\Models\DocType;

$total = Helper::getRowsDoc();
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * LIMIT;
$pages = ceil($total / LIMIT);
$prev = $page - 1;
$next = $page + 1;
?>

<div class="card border border-info">
    <div class="card mb-3">
        <div class="card-header bg-info">
            <i class="fa fa-file-text-o"></i>
            My Documents
        </div>
        <div class="card-body">
            <!--<p><a href="<?= PROOT ?>documents/add" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> เพิ่ม</a></p>-->
            <div class="table-responsive table-border-blue">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>เอกสารของ</th>
                            <th>ชื่อเอกสาร</th>
                            <th>ประเภท</th>
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
                        <?php
                        if ($page == 1) {
                            $i = $page;
                        } else {
                            $i = $page * LIMIT - LIMIT + 1;
                        }
                        foreach ($this->documents as $document) :
                            ?>
                            <tr>
                                <td><?= sprintf('%03d', $i++) ?></td>
                                <td>
                                    <?= $document->fname ?>
                                </td>
                                <td>
                                    <a href="<?= PROOT ?>documents/details/<?= $document->id ?>?page=<?= $_GET['page'] ?>">
                                        <?= $document->doc_title ?>
                                    </a>
                                </td>
                                <td>
                                    <?= $document->doc_type ?></td>
                                <td>
                                    <a href="<?= PROOT . 'uploads/' . $document->type_id . '/' . $document->doc_copy ?>" class="btn btn-success btn-sm" target="_blank" title="แสดง">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="<?= PROOT ?>documents/edit/<?= $document->id ?>?page=<?= $_GET['page'] ?>" class="btn btn-warning btn-sm" title="แก้ไข">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a href="<?= PROOT ?>documents/delete/<?= $document->id ?>?page=<?= $_GET['page'] ?>" class="btn btn-danger btn-sm" 
                                       onclick="if (!confirm('Are you sure?')) {
                                                       return false;
                                                   }" title="ลบ">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- Pagination -->
                <?php if ($total > 0) : ?>
                    <div class="container">
                        <div class="row">
                            <div class="">
                                <ul class="pagination">
                                    <?php if ($page > 1) : ?>
                                        <li class="page-item">
                                            <a class="page-link" title="หน้าแรก" href="<?= PROOT ?>documents/index?page=1"><i class="fa fa-backward"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" title="หน้าก่อน" href="<?= PROOT ?>documents/index?page=<?= $prev ?>"><i class="fa fa-step-backward"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php for ($i = 1; $i <= $pages; $i++) : ?>
                                        <li class="page-item <?= ($_GET['page'] == $i) ? "active" : "" ?>">
                                            <a class="page-link" href="<?= PROOT ?>documents/index?page=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                    <?php endfor; ?>
                                    <?php if ($pages != $page) : ?>
                                        <li class="page-item">
                                            <a class="page-link" title="หน้าถัดไป" href="<?= PROOT ?>documents/index?page=<?= $next ?>"><i class="fa fa-step-forward"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" title="หน้าสุดท้าย" href="<?= PROOT ?>documents/index?page=<?= $pages ?>"><i class="fa fa-forward"></i></a>
                                        </li>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="container text-danger">
                        <h3>ไม่มีรายการที่จะแสดง</h3>
                    </div>
                <?php endif; ?>
                <!-- Pagination -->
            </div>
        </div>
    </div>
</div>
<?php
$this->end();
