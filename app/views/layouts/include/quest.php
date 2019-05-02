<li class="nav-item has-treeview">
    <a href="<?= PROOT ?>home/dashboard1" class="nav-link <?= ($url[1] == 'dashboard1') ? "active" : "" ?>">
        <i class="nav-icon fa fa-home"></i>
        <p>
            Home
        </p>
    </a>
</li>    
<li class="nav-item has-treeview">
    <a href="<?= PROOT ?>register/register" class="nav-link <?= ($url[1] == 'register') ? "active" : "" ?>">
        <i class="nav-icon fa fa-user-circle-o text-warning"></i>
        <p>
            Register
        </p>
    </a>
</li>
<li class="nav-item has-treeview">
    <a href="<?= PROOT ?>register/login" class="nav-link <?= ($url[1] == 'login') ? "active" : "" ?>">
        <i class="nav-icon fa fa-sign-in text-info"></i>
        <p>
            Login
        </p>
    </a>
</li>