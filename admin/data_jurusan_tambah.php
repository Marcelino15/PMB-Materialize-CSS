<?php include_once 'include/header.php'; ?>
<?php include_once 'include/menu-navigasi.php'; ?>
<section>
    <div class="container">
        <div class="col s12 m6">
            <h6><strong>FORMULIR PENAMBAHAN JURUSAN</strong></h6>

            <div class="row">
                <form class="col s12" action="data_jurusan_simpan.php" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="fakultas_pilih" id="fakultas_pilih">
                                <?php
                                $sql = "SELECT * FROM fakultas";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <option value="<?= $row['id_fakultas']; ?>"> <?= $row['nama_fakultas']; ?></option>
                                <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                mysqli_close($conn);
                                ?>
                            </select>
                            <label for="fakultas_pilih">Pilih Fakultas</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Masukkan Nama Jurusan" id="nama_jurusan" type="text" class="validate" name="nama_jurusan">
                            <label for="nama_jurusan">Nama Lengkap Jurusan</label>
                        </div>
                    </div>
                    <button type="submit" class="waves-effect waves-light btn btn-block orange">TAMBAH</button>
                </form>
            </div>

        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
</script>
<?php include_once 'include/footer.php'; ?>