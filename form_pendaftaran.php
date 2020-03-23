<?php include_once 'include/header.php'; ?>
<?php include_once 'include/menu-navigasi.php'; ?>
<div class="container mb-130">
    <div class="row">
        <div class="col s12">
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <div class="card blue-grey darken-1">
                                    <div class="card-action blue accent-1">
                                        <h6>
                                            <strong>Formulir Pendaftaran Mahasiswa Baru UTM (Universitas Teknologi
                                                Mataram)</strong>
                                        </h6>
                                        <p>silahkah isi data dengan benar pada form dibawah ini</p>
                                    </div>
                                    <div class="card-content white">
                                        <div class="row">
                                            <form class="col s12" action="form_pendaftaran_simpan.php" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="input-field col s12 l4 xl4">
                                                        <input id="first_name" type="text" class="validate" name="nama">
                                                        <label for="first_name">Nama Lengkap</label>
                                                    </div>
                                                    <div class="input-field col s12 l4 xl4">
                                                        <input id="last_name" type="text" class="validate" name="no_tlpn">
                                                        <label for="last_name">Nomor telephone/Handphone</label>
                                                    </div>
                                                    <div class="input-field col s12 l4 xl4">
                                                        <div class="file-field input-field">
                                                            <div class="btn">
                                                                <span>SKHUN</span>
                                                                <input type="file" name="foto_skhun">
                                                            </div>
                                                            <div class="file-path-wrapper">
                                                                <input class="file-path validate" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12 l4 xl4">
                                                        <select name="jenis_kelamin">
                                                            <option value="" disable> -- Pilih Jenis Kelamin --</option>
                                                            <option value="0">Laki-Laki</option>
                                                            <option value="1">Perempuan</option>
                                                        </select>
                                                        <label>Jenis Kelamin</label>
                                                    </div>
                                                    <div class="input-field col s12 l4 xl4">
                                                        <input id="provinsi" type="text" class="validate" name="provinsi">
                                                        <label for="provinsi">Provinsi</label>
                                                    </div>
                                                    <div class="input-field col s12 l4 xl4">
                                                        <div class="file-field input-field">
                                                            <div class="btn">
                                                                <span>IJAZAH</span>
                                                                <input type="file" name="foto_ijazah">
                                                            </div>
                                                            <div class="file-path-wrapper">
                                                                <input class="file-path validate" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12 l4 xl4">
                                                        <select name="agama">
                                                            <option value="" disabled>-- Pilih Agama --</option>
                                                            <option value="0">Islam</option>
                                                            <option value="1">Kristen</option>
                                                            <option value="2">Katolik</option>
                                                            <option value="3">Budha</option>
                                                            <option value="4">Hindu</option>
                                                            <option value="5">Lainya</option>
                                                        </select>
                                                        <label>Agama</label>
                                                    </div>
                                                    <div class="input-field col s12 l4 xl4">
                                                        <input id="kota" type="text" class="validate" name="kota_asal">
                                                        <label for="kota">Kota</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12 l4 xl4">
                                                        <input id="email" type="text" class="validate" name="email">
                                                        <label for="email">E-Mail</label>
                                                    </div>
                                                    <div class="input-field col s12 l4 xl4">
                                                        <input id="sekolah_asal" type="text" class="validate" name="sekolah_asal">
                                                        <label for="sekolah_asal">Sekolah Asal</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12 l4 xl4 offset-none offset-xl4">
                                                        <select name="jurusan_pilih">
                                                            <?php
                                                            $sql = "SELECT * FROM jurusan";
                                                            $result = mysqli_query($conn, $sql);
                                                            if (mysqli_num_rows($result) > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                                    <option value="<?= $row['id_jurusan']; ?>"> <?= $row['nama_jurusan']; ?></option>
                                                            <?php
                                                                }
                                                            } else {
                                                                echo "0 results";
                                                            }
                                                            mysqli_close($conn);
                                                            ?>
                                                        </select>
                                                        <label>Jurusan Pilihan</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <button type="submit" class="waves-effect waves-light btn orange btn-block">Daftar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
</script>
<?php include_once 'include/footer.php'; ?>