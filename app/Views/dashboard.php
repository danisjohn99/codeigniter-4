<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="row">

    <div class="col-md-4">
        <div class="card p-3 shadow">
            <h6>Total Posts</h6>
            <h3><?= $totalPosts ?></h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow">
            <h6>Users</h6>
            <h3><?= $totalUsers ?></h3>
        </div>
    </div>

</div>

<?= $this->endSection() ?>