<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="VoteOn">
    <link href="<?= base_url(); ?>assets/home-css/img/logo.png" rel="icon">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <link href="<?= base_url(); ?>assets/home-css/img/logo.png" rel="icon">
    <title>Admin Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/login-admin/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>


    <div class="login-box">
        <h2>Login</h2>
        <?php if ($this->session->flashdata('fail') != '') : ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <span><b> Failed - </b> <?php echo $this->session->flashdata('fail'); ?></span>
                </div>
            </div>
        <?php endif ?>

        <form method="post" action="<?= base_url(); ?>admin/login">

            <div class="user-box">
                <input type="text" name="nama" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="pass" required="">
                <label>Password</label>
            </div>
            <span></span>
            <input type="submit" class="tombol">
            <span></span>
        </form>
    </div>


</body>

</html>