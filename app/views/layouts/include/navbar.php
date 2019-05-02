<nav class="main-header navbar navbar-expand bg-secondary-gradient navbar-light border-bottom fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
       
        <!-- 
        <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link active text-warning"><h4><?=$this->siteTitle()?></h4></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
        -->
    </ul>

    <!-- SEARCH FORM -->
    <!--
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <?php if(App\Models\Users::currentUser()): ?>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-user-circle-o text-danger"></i> <strong class="text-warning"><?= App\Models\Users::currentUser()->full_name?></strong>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fa fa-male mr-2 text-success"></i> ข้อมูลสว่นตัว
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fa fa-key mr-2 text-warning"></i> รหัสผ่าน
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?=PROOT?>register/logout" class="dropdown-item">
                    <i class="fa fa-power-off mr-2 text-danger"></i> ออกจากระบบ
                </a>
            </div>
        </li>
        <!--
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                    class="fa fa-th-large"></i></a>
        </li>
        -->
        <?php endif; ?>
    </ul>
</nav>