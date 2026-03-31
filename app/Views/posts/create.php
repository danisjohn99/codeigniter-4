<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="card shadow p-4">
    <h4>Add Post</h4>

    <form method="post" action="/storePost">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>

        <button class="btn btn-success">Save</button>
        <a href="/dashboard" class="btn btn-secondary">Back</a>
    </form>
</div>

<?= $this->endSection() ?>