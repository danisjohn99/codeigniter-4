<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between mb-3">
    <h4>Posts</h4>
    <a href="/create" class="btn btn-primary">+ Add</a>
</div>

<div class="card p-3 shadow">

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th width="150">Action</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($posts as $k => $post): ?>
        <tr>
            <td><?= $k+1 ?></td>
            <td><?= $post['title'] ?></td>
            <td><?= $post['description'] ?></td>
            <td>
                <a href="/edit/<?= $post['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="/delete/<?= $post['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</div>

<?= $this->endSection() ?>