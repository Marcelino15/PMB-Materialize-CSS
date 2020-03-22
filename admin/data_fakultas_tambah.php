<?php include_once 'include/header.php'; ?>
<?php include_once 'include/menu-navigasi.php'; ?>
<section>
    <div class="container">
        <div class="col s12 m6">
            <h6><strong>FORMULIR PENAMBAHAN FAKULTAS</strong></h6>

            <div class="row">
                <form class="col s12" action="data_fakultas_simpan.php" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Masukkan Nama Jurusan" id="nama_fakultas" name="nama_fakultas" type="text" class="validate">
                            <label for="nama_fakultas">Nama Lengkap Jurusan</label>
                        </div>
                    </div>
                    <button type="submit" class="waves-effect waves-light btn btn-block orange">TAMBAH</button type="submit">
                </form>
            </div>

        </div>
    </div>
</section>
<?php include_once 'include/footer.php'; ?>