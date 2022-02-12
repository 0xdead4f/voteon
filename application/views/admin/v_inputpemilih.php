<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Creator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="KPUM, Pemilu Mahasiswa, Sekolah Tinggi Sandi Negara" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url(); ?>assets/css/registrasi.css" rel='stylesheet' type='text/css' />
    <link href="<?= base_url(); ?>assets/home-css/img/logo.png" rel="icon">
    <!--<link href="css/custom.css" rel='stylesheet' type='text/css' />-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'> -->
    <!--/script-->
    <script src="<?php echo base_url(); ?>assets/js/modernizr.custom.97074.js"></script>

</head>

<body>
    <div id="about" style="position: relative;background: linear-gradient(#141e30, #243b55);">
        <div class="container">
            <h3 class="tittle ab" id="title_ab">Input pemilih</h3>
            <!--<div id="line"></div> -->
            <div id="back">
                <div id="left"></div>
                <div id="form" style="background: rgba(0, 0, 0, 0.5);box-sizing: border-box;box-shadow: 0 15px 25px rgb(0 0 0 / 60%);">
                    <form action="<?php echo base_url(); ?>admin/insert_pemilih" method="post" enctype="multipart/form-data">
                        <a href="<?php echo base_url(); ?>admin/menu"><button type="button" id="close_button"> X </button></a><br><br>
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


                        <h5 style="float:left;" id="atribut_input">ID</h5>
                        <input type="text" name="id" id="input" autocomplete="false" autofocus required /><br>
                        <h5 style="float:left;" id="atribut_input">NIK</h5>
                        <input type="text" name="nik" id="input" autocomplete="false" required /><br>
                        <h5 style="float:left;" id="atribut_input">Status</h5>

                        <input type="text" name="status" id="input" autocomplete="false" required /><br>



                        <ul class="actions">
                            <li><input type="submit" class="style1" value="Submit" /></li>
                            <li><input type="reset" class="style2" value="Reset" /></li><br>
                        </ul>
                    </form>
                    <h5 style="float:left;" id="atribut_input"></h5>
                </div>
            </div>

        </div>
    </div>

    <img src="<?php echo base_url(); ?>assets/images/present.png" />
    <div class="copy" style="margin-top:0px;">
        <p>&copy; Design by VoteOn 2022 </p>
    </div>
</body>

</html>