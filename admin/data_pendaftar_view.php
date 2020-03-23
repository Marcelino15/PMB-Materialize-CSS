<?php 
    include_once 'include/header.php'; 
    include_once 'include/menu-navigasi.php';
    $id_pendaftar=$_GET['id_pendaftar'];
    $query = mysqli_query($conn, "SELECT * FROM pendaftar JOIN jurusan ON pendaftar.jurusan_pilihan=jurusan.id_jurusan WHERE id_pendaftar='$id_pendaftar'");
    $data = mysqli_fetch_array($query);
?>
    <div class="container">
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card white darken-1">
                    <div class="card-content black-text">
                        <span class="card-title">Data Pendaftar</span>
                        <table>
                            <tbody>
                            <tr>
                                <td>NAMA</td>
                                <td><?= $data['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>JENIS KELAMIN</td>
                                <td>       
                                    <?php
                                        if($data['jenis_kelamin']==0)
                                        {
                                            echo "laki-laki";
                                        }
                                        else
                                        {
                                            echo "Perempuan";
                                        }
                                        ?>
                                </td>
                            </tr>
                            <tr>
                                <td>KOTA ASAL</td>
                                <td><?= $data['kota']; ?></td>
                            </tr>
                            <tr>
                                <td>PROVINSI</td>
                                <td><?= $data['provinsi']; ?></td>
                            </tr>
                            <tr>
                                <td>JURUSAN</td>
                                <td><?= $data['nama_jurusan']; ?></td>
                            </tr>
                            <tr>
                                <td>AGAMA</td>
                                <td>
                                    <?php
                                        if($data['agama']==0)
                                        {
                                            echo "Islam";
                                        }
                                        else  if($data['agama']==1)
                                        {
                                            echo "Kristen";
                                        }
                                        else  if($data['agama']==2)
                                        {
                                            echo "katolik";
                                        }
                                        else  if($data['agama']==3)
                                        {
                                            echo "Hindu";
                                        }
                                        else  if($data['agama']==4)
                                        {
                                            echo "Budha";
                                        }
                                        else  if($data['agama']==5)
                                        {
                                            echo "Lainya";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>EMAIL</td>
                                <td><?= $data['email']; ?></td>
                            </tr>
                            <tr>
                                <td>SEKOLAH ASAL</td>
                                <td><?= $data['sekolah_asal']; ?></td>
                            </tr>
                            <tr>
                                <td>NO TLPN</td>
                                <td><?= $data['no_tlpn']; ?></td>
                            </tr>
                            <tr>
                                <td>SKHUN</td>
                                <td>
                                    <?php
                                        if($data['foto_skhun']!=null)
                                        {
                                            echo '<i class="material-icons green-text">check</i>';
                                        }
                                        else
                                        {
                                            echo '<i class="material-icons red-text">close</i>';
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>IJAZAH</td>
                                <td>
                                    <?php
                                        if($data['foto_ijazah']!=null)
                                        {
                                            echo '<i class="material-icons green-text">check</<i>';
                                        }
                                        else
                                        {
                                            echo '<i class="material-icons red-text">close</i>';
                                        }
                                    ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action grey lighten-4">
                        <a href="data_pendaftar_update.php?id_pendaftar=<?= $id_pendaftar ?>&status_pendaftaran=2" class="waves-effect waves-light btn green">TERIMA</a>
                        <a href="data_pendaftar_update.php?id_pendaftar=<?= $id_pendaftar ?>&status_pendaftaran=3" class="waves-effect waves-light btn red">TOLAK</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="../assets/image/gambar_pendaftar/<?= $data['id_pendaftar']."-".$data['foto_skhun'] ?>" alt="SKHUN">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><strong>FOTO SKHUN</strong></span>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="../assets/image/gambar_pendaftar/<?= $data['id_pendaftar']."-".$data['foto_ijazah'] ?>" alt="IJAZAH">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><strong>FOTO IJAZAH</strong></span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?php include_once 'include/footer.php'; ?>