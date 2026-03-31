<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="card shadow p-4">
    <h4>Edit Post</h4>

    <form method="post" action="/update/<?= $post['id'] ?>">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="<?= $post['title'] ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"><?= $post['description'] ?></textarea>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="/dashboard" class="btn btn-secondary">Back</a>
    </form>
</div>

<?= $this->endSection() ?>