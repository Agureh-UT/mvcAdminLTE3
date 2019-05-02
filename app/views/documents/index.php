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
        <p><a href="<?= PROOT ?>documents/add" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> เพิ่ม</a></p>
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>เอกสาร</th>
                        <th>ประเภท</th>
                        <th>เอกสารของ</th>
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
                                <a href="<?= PROOT . 'uploads/' . $document->type_id . '/' . $document->doc_copy ?>" class="btn btn-info btn-sm" target="_blank">
                                    <i class="fa fa-eye"></i> ดูเอกสาร
                                </a>
                                <a href="<?= PROOT ?>documents/edit/<?= $document->id ?>" class="btn btn-warning btn-sm">
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
            use App\Models\Documents;

            $rows = new Documents;
            $total = $rows->getRows();
            $limit = 2;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;
            $pages = ceil($total / $limit);
            $prev = $page - 1;
            $next = $page + 1;
            ?>
            <div class="container">
                <div class="row">
                    <div class="">
                        <ul class="pagination">
                            <?php if ($page > 1) : ?>
                                <li class="page-item">
                                    <a class="page-link" title="หน้าแรก" href="<?= PROOT ?>documents"><i class="fa fa-backward"></i></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" title="หน้าก่อน" href="<?= PROOT ?>documents?page=<?= $prev ?>"><i class="fa fa-step-backward"></i></a>
                                </li>
                            <?php endif; ?>
                            <?php for ($i = 1; $i <= $pages; $i++) : ?>
                                <li class="page-item <?= ($_GET['page'] == $i) ? "active" : "" ?>">
                                    <a class="page-link" href="<?= PROOT ?>documents?page=<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <?php if ($pages != $page) : ?>
                                <li class="page-item">
                                    <a class="page-link" title="หน้าถัดไป" href="<?= PROOT ?>documents?page=<?= $next ?>"><i class="fa fa-step-forward"></i></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" title="หน้าสุดท้าย" href="<?= PROOT ?>documents?page=<?= $pages ?>"><i class="fa fa-forward"></i></a>
                                </li>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->end();
