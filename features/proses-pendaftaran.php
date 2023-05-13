<?php

include '../core/config.php';

// Cek apakah tomboh daftar sudah diklik atau belum?
if (isset($_POST['daftar'])) {
  // Ambil data dari formulir 
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $sekolah_asal = $_POST['sekolah_asal'];

  // Buat query
  $query = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) 
            VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
  $result = mysqli_query($connection, $query);

  // Cek apakah query berhasil dijalankan atau tidak
  if ($result) {
    // Jika berhasil, redirect ke halaman list-siswa.php
    header('Location: http://localhost/website-berita/pages/list-siswa.php?statusPendaftaran=sukses');
  } else {
    // Jika gagal, tampilkan pesan gagal menyimpan data
    header('Location: http://localhost/website-berita/pages/list-siswa.php?statusPendaftaran=gagal');
  }
}
