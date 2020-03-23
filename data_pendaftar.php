<?php include_once 'include/header.php'; ?>
<?php include_once 'include/menu-navigasi.php'; ?>
<div class="container mb-130">
        <div class="col s12 m6">
            <div class="card white">
                <div class="card-action blue lighten-5">
                    <h6 class="blue-text"><strong>DATA PENDAFTAR UTM (UNIVERSITAS TEKNOLOGI MATARAM)</strong></h6>
                </div>
                <div class="card-content black-text center-align">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th>NO PENDAFTARAN</th>
                                <th>NAMA</th>
                                <th>JENIS KELAMIN</th>
                                <th>KOTA</th>
                                <th>PROVINSI</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $sql = "SELECT * FROM pendaftar";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?= $row['id_pendaftar'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td>
                                            <?php

                                            if ($row['jenis_kelamin'] == 0) {
                                                echo "Laki-Laki";
                                            } else {
                                                echo "Perempuan";
                                            }


                                            ?>

                                        </td>
                                        <td><?= $row['kota'] ?></td>
                                        <td><?= $row['provinsi'] ?></td>
                                        <td>
                                            <?php
                                            if ($row['status_pendaftaran'] == 1) {
                                                echo "<span class='new badge orange' data-badge-caption='DALAM REVIEW'></span>";
                                            } elseif ($row['status_pendaftaran'] == 2) {
                                                echo "<span class='new badge green' data-badge-caption='DI TERIMA'></span>";
                                            } else {
                                                echo "<span class='new badge red' data-badge-caption='DI TOLAK'></span>";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
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
<?php include_once 'include/footer.php'; ?>