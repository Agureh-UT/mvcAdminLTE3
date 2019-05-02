<?php $this->setSiteTitle('Home'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<meta content="jn mvc framework v1" />
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="card">
        <div class="card-header">
                <h3 class="card-title"><?= $this->siteTitle(); ?></h3>

                <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                </div>
        </div>
        <div class="card-body">
                <strong>Welcome, This is home page.</strong>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
                <!--Footer-->
        </div>
        <!-- /.card-footer-->
</div>

<?php $this->end(); ?>