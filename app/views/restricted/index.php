<?php $this->setSiteTitle('Access Restricted'); ?>
<?php $this->start('body'); ?>
<div class="card border border-danger">
    <div class="card-header bg-danger-gradient">
        <h3 class="card-title"><?= $this->siteTitle(); ?></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="alert alert-err has-errors text-danger text-center">
            <h2>
                Not Allowed to Access This page.!
            </h2>
        </div>
        <!--<div class="mb-1 text-center" style="padding-top: 10px">
            <a href="<?= PROOT ?>register/login" class="btn btn-success text-center"><i class="fa fa-sign-in"></i> Login</a> ||
            <a href="<?= PROOT ?>register/register" class="btn btn-info text-center"><i class="fa fa-user-circle-o"></i> Register</a>
        </div>-->
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <!--Footer-->
    </div>
    <!-- /.card-footer-->
</div>
<?php $this->end(); ?>