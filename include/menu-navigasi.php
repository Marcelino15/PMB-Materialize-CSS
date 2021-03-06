    <div class="navbar-fixed">
        <nav class="blue darken-2">
            <div class="nav-wrapper container">
                <a href="index.php" class="brand-logo">
                    PMB-UTM
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">BERANDA</a></li>
                    <li><a href="informasi.php">INFORMASI PENDAFTARAN</a></li>
                    <li><a href="data_pendaftar.php">DATA PENDAFTAR</a></li>
                    <li><a href="form_pendaftaran.php" class="waves-effect waves-light btn orange darken-3 pulse">DAFTAR</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php">BERANDA</a></li>
        <li><a href="informasi.php">INFORMASI PENDAFTARAN</a></li>
        <li><a href="data_pendaftar.php">DATA PENDAFTAR</a></li>
        <li><a href="form_pendaftaran.php" class="waves-effect waves-light btn orange darken-3 pulse">DAFTAR</a></li>
    </ul>

    <script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
    </script>