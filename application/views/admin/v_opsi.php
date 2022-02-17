<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/home-css/img/logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <title>Admin | Opsi</title>
</head>

<body style="background: linear-gradient(#141e30, #243b55);">


    <main>

        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="<?php echo base_url(); ?>admin/menu"><button type="button" id="close_button" style="padding-right:10px;padding-left:10px;float:right;background-color:white;"> X </button></a>

                <span class="fs-4" style="color:white;">Menu Opsi</span>

            </header>
            <?php if ($this->session->flashdata('fail') != '') : ?>
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        <span><b> Failed - </b> <?php echo $this->session->flashdata('fail'); ?></span>
                    </div>
                </div>
            <?php endif ?>
            <?php if ($this->session->flashdata('success') != '') : ?>
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <span><b> Success - </b> <?php echo $this->session->flashdata('success'); ?></span>
                    </div>
                </div>
            <?php endif ?>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Mereset data</h1>
                    <p class="col-md-8 fs-4">Berguna untuk mereset data suara yang sudah digunakan secara keseluruhan. sehingga tidak terjadi tabrakan data pada pembaruan pemilu.</p>
                    <a href="<?= base_url(); ?>admin/reset_surat_suara" class="btn btn-danger btn-lg" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Reset surat suara</a>
                    <a href="<?= base_url(); ?>admin/reset_data_suara" class="btn btn-warning btn-lg" onclick="return confirm('Apakah anda yakin ingin mereset?');">Reset token</a>
                    <a href="<?= base_url(); ?>admin/reset_status_pemilih" class="btn btn-danger btn-lg" onclick="return confirm('Apakah anda yakin ingin mereset?');">Reset status pemilih</a>
                </div>
            </div>

            <div class="p-5 mb-4 bg-dark rounded-3">
                <div class="container-fluid py-5">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2>Input data pemilih</h2>
                        <p>Untuk menginput data dari warga yang ingin melakukan e-voting.</p>
                        <a href="<?= base_url(); ?>admin/pemilih" class="btn btn-primary btn-lg">Input data pemilih</a>
                    </div>
                </div>

            </div>

            <footer class="pt-3 mt-4 border-top" style="color:white;">
                &copy; Design by VoteOn 2022
            </footer>
        </div>
    </main>


</body>

</html>