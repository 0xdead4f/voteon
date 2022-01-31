<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <?= $this->include("layout/navbar.php"); ?>


    <div class="login-box">
        <h2>Login</h2>
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>/login/process">
            <?= csrf_field(); ?>
            <div class="user-box">
                <input type="text" name="npm" required="">
                <label>NPM</label>
            </div>
            <div class="user-box">
                <input type="password" name="token" required="">
                <label>Token</label>
            </div>
            <span></span>
            <input type="submit" class="tombol">
            <span></span>
        </form>
    </div>



</body>

</html>