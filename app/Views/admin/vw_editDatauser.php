<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">

        <h2 class="my-3">Form tambah data user</h2>
        <form action="/datauser/update/<?= $data['id']; ?>" method="post">
            <?= csrf_field(); ?>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" name="id" class="form-control" id="id" autofocus value="<?= $data['id']; ?>" disabled>

            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="number" name="npm" class="form-control" id="npm" value="<?= $data['npm']; ?>">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="number" name="status" class="form-control" id="status" value="<?= $data['status']; ?>">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>

    </div>
</div>

<?= $this->endSection(); ?>