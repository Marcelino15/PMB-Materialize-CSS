<?php include_once 'include/header.php'; ?>
<?php include_once 'include/menu-navigasi.php'; ?>
<div class="container"> 
    <div class="col s12">
        <div class="card horizontal">
            <div class="card-stacked">
                <div class="card-content">
                    <div class="card-action blue-grey lighten-5 green-text">
                        <h6 class="blue-text"><strong>DATA PENDAFTAR PMB UTM 2020/2021</strong></h6>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>NO PENDAFTARAN</th>
                                <th>NAMA</th>
                                <th>JURUSAN</th>
                                <th>FAKULTAS</th>
                                <th>JENIS KELAMIN</th>
                                <th>KOTA</th>
                                <th>PROVINSI</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $sql = "SELECT * FROM pendaftar JOIN jurusan ON pendaftar.jurusan_pilihan=jurusan.id_jurusan JOIN fakultas ON jurusan.id_fakultas=fakultas.id_fakultas";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?= $row['id_pendaftar'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['nama_jurusan'] ?></td>
                                        <td><?= $row['nama_fakultas'] ?></td>
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
                                                echo "<span class='waves-effect waves-light btn btn-small orange'>REVIEW</span>";
                                            } elseif ($row['status_pendaftaran'] == 2) {
                                                echo "<button class='waves-effect waves-light btn btn-small green'>TERIMA</button>";
                                            } else {
                                                echo "<button class='waves-effect waves-light btn btn-small red'>TOLAK</button>";
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
</div>
<?php include_once 'include/footer.php'; ?>