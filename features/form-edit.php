<?php

include '../core/config.php';
include '../core/header.php';

if (!isset($_GET['id'])) {
  header('Location: http://localhost/website-berita/pages/list-siswa.php');
}

// Ambil id dari Query String
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$query = "SELECT * FROM calon_siswa WHERE id=$id";
$result = mysqli_query($connection, $query);
$siswa = mysqli_fetch_assoc($result);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($result) < 1) {
  die("Data tidak ditemukan...");
}
?>

<body class="container mx-auto">
  <h3 class="text-center font-bold mt-3">Edit data peserta</h3>
  <hr>
  <form action="proses-edit.php" method="POST" class="w-50 mx-auto">
    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
      <input type="text" name="nama" placeholder="Nama lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $siswa['nama'] ?>">

    </div>
    <div class="mb-3 d-flex flex-column">
      <label for="alamat" class="form-label">Alamat</label>
      <textarea name="alamat" class="form-control" placeholder="Masukkan alamat lengkap"><?php echo $siswa['alamat'] ?></textarea>
    </div>
    <div class="mb-3 d-flex">
      <label for="jenis_kelamin">Jenis Kelamin: </label>
      <div class="d-flex flex-column ms-2">
        <?php $jk = $siswa['jenis_kelamin']; ?>
        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
      </div>
    </div>
    <div class="mb-3 d-flex">
      <label for="agama">Agama: </label>
      <?php $agama = $siswa['agama']; ?>
      <select name="agama" class="form-select ms-2">
        <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
        <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
        <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
        <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
        <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
      </select>
    </div>
    <div class="mb-3 d-flex">
      <label for="sekolah_asal" class="w-25">Sekolah Asal: </label>
      <input type="text" name="sekolah_asal" class="form-control " placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
    </div>
    <div>
      <input type="submit" class="bg-primary text-white w-100 btn" value="Edit nama peserta" name="simpan" />
    </div>
  </form>

</body>

</html>