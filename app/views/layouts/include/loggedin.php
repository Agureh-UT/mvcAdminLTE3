<!-- Home -->
<div class="user-panel">
    <li class="nav-item has-treeview <?= ($url[0] == 'home') ? "menu-open" : "" ?>">
        <a href="#" class="nav-link <?= ($url[0] == 'home') ? "active" : "" ?>">
            <i class="nav-icon fa fa-home"></i>
            <p>
                หน้าหลัก
                <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview ul-sub">
            <li class="nav-item">
                <a href="<?= PROOT ?>home/dashboard1" class="nav-link <?= ($url[1] == 'dashboard1' || $url[1] == '') ? "active" : "" ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Dashboard v1</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= PROOT ?>home/dashboard2" class="nav-link <?= ($url[1] == 'dashboard2') ? "active" : "" ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Dashboard v2</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= PROOT ?>home/dashboard3" class="nav-link <?= ($url[1] == 'dashboard3') ? "active" : "" ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Dashboard v3</p>
                </a>
            </li>
        </ul>
    </li> 
</div>
<!-- End Home -->
<!-- Documents -->

<div class="user-panel">
    <li class="nav-item has-treeview <?= ($url[0] == 'documents') ? "menu-open" : "" ?>">
        <a href="#" class="nav-link <?= ($url[0] == 'documents') ? "active" : "" ?>">
            <i class="nav-icon fa fa-book"></i>
            <p>
                เอกสาร
                <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview ul-sub">
            <li class="nav-item">
                <a href="<?= PROOT ?>documents?page=1" class="nav-link <?= ($url[0] == 'documents' && $url[1] == 'index') ? "active" : "" ?>">
                    <i class="fa fa-file-text-o nav-icon"></i>
                    <p>รายการเอกสาร</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= PROOT ?>documents/add" class="nav-link <?= ($url[0] == 'documents' && $url[1] == 'add') ? "active" : "" ?>">
                    <i class="fa fa-file-o nav-icon"></i>
                    <p>เพิ่มรายการเอกสาร</p>
                </a>
            </li> 
        </ul>
    </li>
</div>
<!-- End Documents -->
<!-- Contacts -->
<div class="user-panel">
    <li class="nav-item has-treeview <?= ($url[0] == 'contacts') ? "menu-open" : "" ?>">
        <a href="#" class="nav-link <?= ($url[0] == 'contacts') ? "active" : "" ?>">
            <i class="nav-icon fa fa-id-card text-gray"></i>
            <p>
                รายชื่อการติดต่อ
                <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview ul-sub">
            <li class="nav-item">
                <a href="<?= PROOT ?>contacts/index" class="nav-link <?= ($url[0] == 'contacts' && $url[1] == 'index') ? "active" : "" ?>">
                    <i class="fa fa-id-card-o nav-icon"></i>
                    <p>รายการรายชื่อ</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= PROOT ?>contacts/add" class="nav-link <?= ($url[0] == 'contacts' && $url[1] == 'add') ? "active" : "" ?>">
                    <i class="fa fa-file-o nav-icon"></i>
                    <p>เพื่มรายชื่อ</p>
                </a>
            </li>
        </ul>
    </li>
</div>
<!-- End Contacts -->

<li class="nav-item">
    <a href="<?= PROOT ?>register/logout" class="nav-link">
        <i class="nav-icon fa fa-power-off text-danger"></i>
        <p>
            ออกจากระบบ
        </p>
    </a>
</li>