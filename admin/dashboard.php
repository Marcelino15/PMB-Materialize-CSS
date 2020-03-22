<?php include_once 'include/header.php'; ?>
<?php include_once 'include/menu-navigasi.php'; ?>
<section>
    <div class="container">
        <div class="col s12 m6">
            <div class="card white">
                <div class="card-content black-text center-align">
                    <span class="card-title">SELAMAT DATANG ( <?= $_SESSION['nama']; ?> ) DI SISTEM ADMINISTRATOR </span>
                    <img src="../assets/image/Log-in.png" alt="gambar admin" class="img-dashboard">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'include/footer.php' ?>