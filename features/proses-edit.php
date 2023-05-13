<?php

include '../core/config.php';

// check apakah tombol simpan sudah di klik atau belum
if (isset($_POST['simpan'])) {

  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $sekolah_asal = $_POST['sekolah_asal'];

  $query = "UPDATE calon_siswa 
            SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' 
            WHERE id=$id";

  $result = mysqli_query($connection, $query);

  if ($result) {
    header('Location: http://localhost/website-berita/pages/list-siswa.php?statusEdit=sukses');
  } else {
    header('Location: http://localhost/website-berita/pages/list-siswa.php?statusEdit=gagal');
  }
}
