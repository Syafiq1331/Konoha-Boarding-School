<!-- Header -->
<?php include '../core/header.php' ?>

<body class="container mx-auto">
  <h3 class="pt-3 text-center">Formulir Pendaftaran Siswa Baru</h3>
  <hr>
  <form action="../features/proses-pendaftaran.php" method="POST" class="w-50 mx-auto">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
      <input type="text" name="nama" placeholder="Nama lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3 d-flex flex-column">
      <label for="alamat" class="form-label">Alamat</label>
      <textarea name="alamat" class="form-control" placeholder="Masukkan alamat lengkap"></textarea>
    </div>
    <div class="mb-3 d-flex">
      <label for="jenis_kelamin">Jenis Kelamin: </label>
      <div class="d-flex flex-column ms-2">
        <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
      </div>
    </div>
    <div class="mb-3 d-flex">
      <label for="agama">Agama: </label>
      <select name="agama" class="form-select ms-2">
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
        <option>Atheis</option>
      </select>
    </div>
    <div class="mb-3 d-flex">
      <label for="sekolah_asal" class="w-25">Sekolah Asal: </label>
      <input type="text" name="sekolah_asal" class="form-control " placeholder="nama sekolah" />
    </div>
    <div>
      <input type="submit" class="bg-primary text-white w-100 btn" value="Daftar" name="daftar" />
    </div>
  </form>
</body>