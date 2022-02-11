<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/home-css/img/logo.png">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/login/css/style.css">

    <title>Log In</title>



</head>

<body>

    <?php $this->load->view('layout/v_navbar'); ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= base_url(); ?>assets/login/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Log In</h3>
                                <p class="mb-4">Harap untuk login dengan memasukan NIK dan token agar bisa melakukan e-voting.</p>
                            </div>
                            <?php if ($this->session->flashdata('fail') != '') : ?>
                                <div class="col-md-12">
                                    <div class="alert alert-danger">
                                        <span><b> Failed - </b> <?php echo $this->session->flashdata('fail'); ?></span>
                                    </div>
                                </div>
                            <?php endif ?>
                            <form action="<?php echo base_url(); ?>pilih/verif" method="post">
                                <div class="form-group first">
                                    <label for="NIK">NIK</label>
                                    <input type="text" class="form-control" id="NIK" name="nik">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="token">Token</label>
                                    <input type="token" class="form-control" id="token" name="token">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>

                                <input type="submit" value="Log In" class="btn btn-block btn-primary">


                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="<?= base_url(); ?>assets/login/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/login/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/login/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/login/js/main.js"></script>
</body>

</html>