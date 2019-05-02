<?php $this->setSiteTitle('Contacts'); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="card mb-3">
    <div class="card-header bg-info">
        <i class="fa fa-id-card-o"></i>
        My Contacts
    </div>
    <div class="card-body">
      <p><a href="<?=PROOT?>contacts/add" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> เพิ่ม</a></p>
<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Province</th>
                <th>Cell Phone</th>
                <th>Work Phone</th>
                <th>Manage</th>
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
            <?php foreach ($this->contacts as $contact): ?>
                <tr>
                    <td>
                        <a href="<?= PROOT ?>contacts/details/<?= $contact->id ?>">
                            <?= $contact->displayName() ?>
                        </a>
                    </td>
                    <td><?= $contact->email ?></td>
                    <td><?= $contact->state ?></td>
                    <td><?= $contact->cell_phone ?></td>
                    <td><?= $contact->work_phone ?></td>
                    <td>
                        <a href="<?= PROOT ?>contacts/edit/<?= $contact->id ?>" class="btn btn-warning btn-sm">
                            <i class="fa fa-pencil-square-o"></i> Edit
                        </a>
                        <a href="<?= PROOT ?>contacts/delete/<?= $contact->id ?>" class="btn btn-danger btn-sm" onclick="if (!confirm('Are you sure?')) {
                                        return false;
                                    }">
                            <i class="fa fa-trash-o"></i> Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>
<?php $this->end(); ?>
