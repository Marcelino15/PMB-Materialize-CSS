<?php include_once 'include/header.php'; ?>
<?php include_once 'include/menu-navigasi.php'; ?>
<section>
    <div class="container">
        <div class="col s12 m6">
            <div class="card white">
                <div class="card-action blue lighten-5">
                    <h6 class="blue-text"><strong>DATA FAKULTAS UTM (UNIVERSITAS TEKNOLOGI MATARAM)</strong></h6>
                </div>
                <div class="card-content black-text ">
                    <a href="data_fakultas_tambah.php" class="waves-effect waves-light btn btn-small green">Tambah</a>
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA JURUSAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                            $sql = "SELECT * FROM fakultas";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $row['nama_fakultas'] ?></td>
                                        <td>
                                            <a href="data_fakultas_view.php?id_fakultas=<?= $row['id_fakultas']; ?>" class="waves-effect waves-light btn blue"><i class="material-icons">visibility</i></a>
                                            <a href="data_fakultas_hapus.php?id_fakultas=<?= $row['id_fakultas']; ?>" class="waves-effect waves-light btn black"><i class="material-icons">delete</i></a>
                                        </td>
                                    </tr>
                                    
                            <?php
                                $i++;
                                }
                            } else {
                                echo "0 results";
                            }

                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once 'include/footer.php'; ?>