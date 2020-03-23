<?php
include "config/database.php";
include "include/kode_pendaftaran.php";
require "include/header.php";

//TERIMA VARIABEL DARI FORM
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$no_tlpn = $_POST['no_tlpn'];
$provinsi = $_POST['provinsi'];
$kota_asal = $_POST['kota_asal'];
$sekolah_asal = $_POST['sekolah_asal'];
$jurusan_pilih = $_POST['jurusan_pilih'];

$status_pendaftaran = 1;
$id_pendaftar = kode_pendaftaran($conn);

// end membuat koneksi
$temp1 = $_FILES['foto_skhun']['tmp_name'];
$name1 = $_FILES['foto_skhun']['name'];
$size1 = $_FILES['foto_skhun']['size'];
$type1 = $_FILES['foto_skhun']['type'];

$temp2 = $_FILES['foto_ijazah']['tmp_name'];
$name2 = $_FILES['foto_ijazah']['name'];
$size2 = $_FILES['foto_ijazah']['size'];
$type2 = $_FILES['foto_ijazah']['type'];

$folder = "assets/image/gambar_pendaftar/$id_pendaftar-";

move_uploaded_file($temp1, $folder . $name1);
move_uploaded_file($temp2, $folder . $name2);



$sql = "INSERT INTO pendaftar (id_pendaftar,nama, jenis_kelamin, agama,email,no_tlpn,provinsi,kota,sekolah_asal,jurusan_pilihan,status_pendaftaran,foto_skhun,foto_ijazah)
 values ('$id_pendaftar','$nama',$jenis_kelamin,$agama,'$email','$no_tlpn','$provinsi','$kota_asal','$sekolah_asal',$jurusan_pilih,$status_pendaftaran,'$name1','$name2')";

if ($conn->query($sql) === TRUE) {
?>

    <div class="container">
        <div class="col s12 m6">
            <div class="card white">
                <div class="card-content white-text">
                    <div class="col s12 m6">
                        <div class="card blue-grey lighten-5">
                            <div class="card-content black-text">
                                <span class="card-title ">PENDAFTARAN ANDA BERHASIL</span>
                                <h3><?= $id_pendaftar ?></h3>
                                <span class="card-title ">"Silahkan catat nomor pendaftaran, Pendaftaran
                                    sedang dalam review panitia"</span>
                                <a href="index.php" class="waves-effect waves-light btn green">KEMBALI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>