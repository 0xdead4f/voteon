<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url(); ?>">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item" id="link-li">
                    <a class="nav-link" aria-current="page" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item" id="link-li">
                    <a class="nav-link" href="<?= base_url(); ?>home/informasi">Informasi</a>
                </li>
                <li class="nav-item" id="link-li">
                    <a class="nav-link" href="<?= base_url(); ?>pilih">E-Voting</a>
                </li>

            </ul>
        </div>


    </div>
</nav>