<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">

        <h2 class="my-3">Form tambah data user</h2>
        <form action="/datauser/save" method="post">
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
                <input type="text" name="id" class="form-control" id="id" autofocus>
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="number" name="npm" class="form-control" id="npm">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-select" aria-label="Default select example">

                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                </select>
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