<?php
use App\Models\Documents;

$rows = new Documents();
$total = $rows;
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
                <li class="page-item">
                    <a class="page-link" title="หน้าแรก" href="<?= PROOT ?>documents"><i class="fa fa-backward"></i></a>
                </li>
                <li class="page-item">
                    <a class="page-link" title="หน้าก่อน" href="<?= PROOT ?>documents?page=<?= $prev ?>"><i class="fa fa-step-backward"></i></a>
                </li>
                <?php for ($i = 1; $i <= $pages; $i++) : ?>
                    <li class="page-item">
                        <a class="page-link" href="<?=PROOT?>documents?page=<?=$i?>"><?=$i?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item">
                    <a class="page-link" title="หน้าถัดไป" href="<?= PROOT ?>documents?page=<?= $next ?>"><i class="fa fa-step-forward"></i></a>
                </li>
                <li class="page-item">
                    <a class="page-link" title="หน้าสุดท้าย" href="<?= PROOT ?>documents?page=<?= $pages ?>"><i class="fa fa-forward"></i></a>
                </li>
        </div>
        <!--<div class="form-group" style="padding-left: 8px">
            <form class="form">
                <select class="form-control">
                    <option>
                        รายการต่อหน้า
                        <?php foreach ([10, 20, 30, 50] as $limit) : ?>
                                        <option value="<?= $limit ?>"><?= $limit ?></option>
                    <?php endforeach; ?>
                    </option>
                </select>
            </form>
        </div> -->
    </div>
</div>