<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <div class="card">


        <div class="card-header">
            <h1 class="mt-5">Data Pemilih</h1>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
        </div>

    <?php endif; ?>
    <a href="datauser/create" class="btn btn-primary mt-2 mb-5">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">NPM</th>
                <th scope="col">Status</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $d['id']; ?></td>
                    <td><?= $d['npm']; ?></td>
                    <td><?= $d['status']; ?></td>
                    <td> <a href="/datauser/edit/<?= $d['id']; ?>" class="btn btn-warning"> Edit</a>

                        <a href="/datauser/delete/<?= $d['id']; ?>" class="btn btn-danger">Hapus</a>
                    <td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    </div>
</div>


<?= $this->endSection(); ?>