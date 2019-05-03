<?php
use App\Models\Contacts;
use App\Models\Users;

$this->setSiteTitle('Contacts'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="card border border-info">
    <div class="card mb-3">
        <div class="card-header bg-info">
            <i class="fa fa-id-card-o"></i>
            My Contacts
        </div>
    </div>
    <?php
    $cont = new Contacts();
    $total = $cont->getRows(Users::currentUser()->id);
    $limit = 3;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;
    $pages = (ceil($total / $limit) > 0) ? ceil($total / $limit) : 1;
    $prev = $page - 1;
    $next = $page + 1;
    ?>
    <div class="card-body">
        <!--<p><a href="<?= PROOT ?>contacts/add" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> เพิ่ม</a></p>-->
        <div class="table-responsive table-border-blue">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อ-สกุล</th>
                        <th>จังหวัด</th>
                        <th>หน่วยงาน</th>
                        <th>เบอร์มือถือ</th>
                        <!--<th>เบอร์ทำงาน</th>-->
                        <th>การจัดการ</th>
                    </tr>
                </thead>
                <!--
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Province</th>
                <th>Cell Phone</th>
                <th>Work Phone</th>
                <th>Manage</th>
            </tr>
        </tfoot>
        -->
                <tbody>
                    <?php
                    if ($page == 1) {
                        $i = $page;
                    } else {
                        $i = $page * 3 - 2;
                    }
                    foreach ($this->contacts as $contact) : ?>
                        <tr>
                            <td><?= sprintf('%03d', $i++) ?></td>
                            <td>
                                <a href="<?= PROOT ?>contacts/details/<?= $contact->id ?>?page=<?= $_GET['page'] ?>">
                                    <?= $contact->displayName() ?>
                                </a>
                            </td>
                            <td><?= $contact->state ?></td>
                            <td><?= $contact->office ?></td>
                            <td><?= $contact->cell_phone ?></td>
                            <!--<td><?= $contact->work_phone ?></td>-->
                            <td>
                                <a href="<?= PROOT ?>contacts/edit/<?= $contact->id ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                <a href="<?= PROOT ?>contacts/delete/<?= $contact->id ?>" class="btn btn-danger btn-sm" onclick="if (!confirm('Are you sure?')) {return false;}">
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
                                        <a class="page-link" title="หน้าแรก" href="<?= PROOT ?>contacts/index?page=1"><i class="fa fa-backward"></i></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" title="หน้าก่อน" href="<?= PROOT ?>contacts/index?page=<?= $prev ?>"><i class="fa fa-step-backward"></i></a>
                                    </li>
                                <?php endif; ?>
                                <?php for ($i = 1; $i <= $pages; $i++) : ?>
                                    <li class="page-item <?= ($_GET['page'] == $i) ? "active" : "" ?>">
                                        <a class="page-link" href="<?= PROOT ?>contacts/index?page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php endfor; ?>
                                <?php if ($pages != $page) : ?>
                                    <li class="page-item">
                                        <a class="page-link" title="หน้าถัดไป" href="<?= PROOT ?>contacts/index?page=<?= $next ?>"><i class="fa fa-step-forward"></i></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" title="หน้าสุดท้าย" href="<?= PROOT ?>contacts/index?page=<?= $pages ?>"><i class="fa fa-forward"></i></a>
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
<?php $this->end(); ?>