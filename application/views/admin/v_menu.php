<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admin Fitur</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="VoteOn" />
  <link href="<?= base_url(); ?>assets/home-css/img/logo.png" rel="icon">
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
  <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'> -->
  <!--/script-->
  <script src="<?php echo base_url(); ?>assets/js/modernizr.custom.97074.js"></script>

</head>

<body>

  <div id="about" style="background: linear-gradient(#141e30, #243b55);">
    <div class="container">
      <h3 class="tittle ab" id="title_ab" style="color:#30b0bb;">Admin Page</h3>
      <!--<div id="line"></div> -->
      <div id="back">

        <div id="form" style="background-color:none;background:rgba(0, 0, 0, 0.5);width:100%;">

          <a href="<?php echo base_url(); ?>index.php/admin/logout"><button type="button" id="close_button" style="margin-top:-40px;margin-right:-40px;"> X </button></a>
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
          <table width="100%" height="200px" border="0" bordercolor="#FFFFFF">
            <tr align="center">
              <td width="20%" id="admin_hover"><a href="<?php echo base_url(); ?>admin/warga">
                  <h4 style="color: white">Data Warga</h4>
                </a></td>
              <td width="20%" id="admin_hover"><a href="<?php echo base_url(); ?>admin/tabulasi">
                  <h4 style="color: white">Hitung suara PEMILU KADES</h4>
              </td>
              <td width="20%" id="admin_hover"><a href="<?php echo base_url(); ?>admin/calon">
                  <h4 style="color: white">Input Calon</h4>
              </td>
              <td width="20%" id="admin_hover"><a href="<?php echo base_url(); ?>admin/opsi ">
                  <h4 style="color: white">Opsi</h4>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="copy" style="margin-top:0px;">
    <p>&copy; Design by VoteOn 2022 </p>
  </div>
</body>

</html>