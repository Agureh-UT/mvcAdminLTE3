<?php $this->setSiteTitle(SITE_TITLE); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<?php
$db = DB::getInstance();
$test = $db->query("SELECT * FROM test");
$data = $test->results();
?>
<h1 class="text-center blue">Welcome to JN MVC Framework!</h1>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>E-mail</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $v) {
            ?>
            <tr>
                <td><?= $v->full_name ?></td>
                <td><?= $v->email ?></td>
                <td><?= $v->phone ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php $this->end(); ?>
