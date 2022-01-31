<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">

        <h2 class="my-3">Form tambah data user</h2>
        <!-- Untuk menampilkan error semua -->
        <?= $validation->listErrors(); ?>
        <form action="/datauser/save_dua" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" name="id" class="form-control <?= ($validation->hasError('id')) ? 'is-invalid' : ''; ?>" id="id" autofocus>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('id'); ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="number" name="npm" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : ''; ?>" id="npm">
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('npm'); ?>
                </div>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="number" name="status" class="form-control <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" id="status">
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('status'); ?>
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>

<?= $this->endSection(); ?>