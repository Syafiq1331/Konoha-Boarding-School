<!-- Connect PHP -->
<?php include '../core/config.php' ?>

<!-- Header -->
<?php include '../core/header.php' ?>

<body class="bg-light container mx-auto">
  <h3 class="pt-3 text-center">List yang sudah mendaftar</h3>
  <hr>

  <a href="../index.php">
    <button class="btn btn-primary">Kembali ke halaman utama</button>
  </a>
  <a href="./form-daftar.php" class="btn btn-primary">
    Daftar murid baru
  </a>

  <table class="table border mt-4  table-bordered ">
    <thead class="table-primary">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Agama</th>
        <th scope="col">Asal Sekolah</th>
        <th scope="col">Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM calon_siswa";
      $result = mysqli_query($connection, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<th scope='row'>" . $row['id'] . "</th>";
          echo "<td>" . $row['nama'] . "</td>";
          echo "<td>" . $row['alamat'] . "</td>";
          echo "<td>" . $row['jenis_kelamin'] . "</td>";
          echo "<td>" . $row['agama'] . "</td>";
          echo "<td>" . $row['sekolah_asal'] . "</td>";
          echo "<td class='d-flex gap-2'>";
          echo "<a href='../features/form-edit.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a>";
          echo "<a href='../features/hapus.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a>";
          echo "</tr>";
        }
      } else {
        echo "<tr>";
        echo "<td colspan='7' class='text-center'>Tidak ada data</td>";
        echo "</tr>";
      }

      ?>
    </tbody>
  </table>
  <p>Total jumlah siswa yang sudah daftar :
    <?php
    $jumlah_siswa = mysqli_num_rows($result);

    echo mysqli_num_rows($result) === 0 ? "Belum ada siswa yang daftar" : "{$jumlah_siswa} orang" ?>
  </p>
</body>