<?php include_once 'include/header.php'; ?>
<?php include_once 'include/menu-navigasi.php'; ?>
<div class="container m-10">
    <div class="row">
        <div class="col s3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="assets/image/logo.png">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><strong>UTM</strong></span>
                    <span class="grey-text">Universitas Teknologi Mataram</span>
                    <span>Pendaftaran Mahasiswa Baru 2020/2021</span>
                </div>
            </div>
        </div>
        <div class="col s9 m9">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="assets/image/diskusi.jpg">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col s4">
            <h5 class="green-text"><i class="fas fa-file"></i>&nbsp;TERAKREDITASI</h5>
            <p>Semua Program di Universitas Teknologi Mataram telah Terakreditasi oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) </p>
        </div>
        <div class="col s4">
            <h5 class="brown-text"><i class="fas fa-map"></i>&nbsp;LOCAL ACADEMCY</h5>
            <p>Universitas Teknologi Mataram dipercaya sebagai Local Academy sertifikasi internasional untuk Cisco (CCNA) dan MikroTik (MTCNA) </p>
        </div>
        <div class="col s4">
            <h5 class="red-text"><i class="fas fa-desktop"></i>&nbsp;LSP UTM (Univsersitas Teknologi Mataram)</h5>
            <p>Memiliki Lembaga Sertifikasi Profesi dibawah Badan Nasional Sertifikasi Profesi, sehingga mahasiswa yang berkompeten dapat mengikuti sertifikasi bidang Networking dan Programing </p>
        </div>
    </div>
    <hr>
    <div class="row m-10">
        <div class="col s12">
            <div class="card white">
                <div class="card-content white-text">
                    <div class="row">
                        <div class="col s4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="assets/image/3.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator blue-text"><strong>TEKNOLOGI INFORMASI DAN KOMUNIKASI</strong></span>
                                    <hr>
                                    <ul>
                                        <?php
                                        $sql = "SELECT * FROM jurusan JOIN fakultas ON jurusan.id_fakultas=fakultas.id_fakultas WHERE jurusan.id_fakultas=1";
                                        $result = mysqli_query($conn, $sql);
                                        $nomor = 1;
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                <li class="black-text" ><strong><?= $row['nama_jurusan'] ?></strong></li>
                                        <?php
                                                $nomor++;
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="assets/image/6.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator orange-text"><strong>ILMU SOSIAL DAN HUMANIORA</strong></span>
                                    <hr>
                                    <ul>
                                        <?php
                                        $sql = "SELECT * FROM jurusan JOIN fakultas ON jurusan.id_fakultas=fakultas.id_fakultas WHERE jurusan.id_fakultas=2";
                                        $result = mysqli_query($conn, $sql);
                                        $nomor = 1;
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                <li class="black-text"><strong><?= $row['nama_jurusan'] ?></strong></li>
                                        <?php
                                                $nomor++;
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="assets/image/6.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator purple-text"><strong>VOKASI</strong></span>
                                    <hr>
                                    <ul>
                                        <?php
                                        $sql = "SELECT * FROM jurusan JOIN fakultas ON jurusan.id_fakultas=fakultas.id_fakultas WHERE jurusan.id_fakultas=3";
                                        $result = mysqli_query($conn, $sql);
                                        $nomor = 1;
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                <li class="black-text"><strong><?= $row['nama_jurusan'] ?></strong></li>
                                        <?php
                                                $nomor++;
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include_once 'include/footer.php'; ?>