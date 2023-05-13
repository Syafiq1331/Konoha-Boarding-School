<?php

include '../core/config.php';

if (isset($_GET['id'])) {
  // Ambil id dari Query String
  $id = $_GET['id'];

  // Buat query hapus
  $query = "DELETE FROM calon_siswa WHERE id=$id";
  $result = mysqli_query($connection, $query);

  // Cek apakah query berhasil dijalankan atau tidak
  if ($result) {
    // Jika berhasil, redirect ke halaman list-siswa.php
    header('Location: http://localhost/website-berita/pages/list-siswa.php?statusHapus=sukses');
  } else {
    // Jika gagal, tampilkan pesan gagal menyimpan data
    header('Location: http://localhost/website-berita/pages/list-siswa.php?statusHapus=gagal');
  }
}
