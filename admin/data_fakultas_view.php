<?php include_once 'include/header.php'; ?>
<?php include_once 'include/menu-navigasi.php'; ?>
<?php
include '../config/database.php';
$id_fakultas = $_GET['id_fakultas'];
$query = mysqli_query($conn, "SELECT * FROM fakultas WHERE id_fakultas='$id_fakultas'");
$data = mysqli_fetch_array($query);
?>
<section>
    <div class="container">
        <div class="col s12 m6">
            <h6><strong>FORMULIR UPDATE Fakultas</strong></h6>

            <div class="row">
                <form class="col s12" action="data_fakultas_update.php" method="GET">
                    <div class="row">
                        <input type=hidden name="id_fakultas" value="<?= $data['id_fakultas']; ?>">
                        <div class="input-field col s12">
                            <input placeholder="Masukkan Nama Fakultas" id="nama_fakultas" name="nama_fakultas" type="text" class="validate" value="<?= $data['nama_fakultas']; ?>">
                            <label for="nama_fakultas">Nama Fakultas</label>
                        </div>
                    </div>
                    <button type="submit" class="waves-effect waves-light btn btn-block orange">UPDATE</button>
                </form>
            </div>

        </div>
    </div>
</section>
<?php include_once 'include/footer.php'; ?>