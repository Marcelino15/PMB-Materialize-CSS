<?php include_once 'include/header.php'; ?>
<?php include_once 'include/menu-navigasi.php'; ?>
<?php
include '../config/database.php';

$id_jurusan = $_GET['id_jurusan'];
$query = mysqli_query($conn, "SELECT * FROM jurusan WHERE id_jurusan='$id_jurusan'");
$data = mysqli_fetch_array($query);
?>
<section>
    <div class="container">
        <div class="col s12 m6">
            <h6><strong>FORMULIR UPDATE JURUSAN</strong></h6>

            <div class="row">
                <form class="col s12" action="data_jurusan_update.php" method="GET">
                    <input type=hidden name="id_jurusan" value="<?= $data['id_jurusan']; ?>">
                    <div class="input-field col s12">
                        <select id="fakultas_pilih" name="fakultas_pilih">
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

                    <div class="input-field col s12">
                        <input placeholder="Masukkan Nama Jurusan" id="nama_jurusan" name="nama_jurusan" type="text" class="validate" value="<?= $data['nama_jurusan']; ?>">
                        <label for="nama_jurusan">Nama Lengkap Jurusan</label>
                    </div>

                    <button type="submit" class="waves-effect waves-light btn btn-block orange">UPDATE</button type="submit">
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