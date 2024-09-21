<?php
    // require_once digunakan untuk menyertakan file.
    require_once "koneksi.php";
    //Instalisasi Objek dari kelas Mahasiswa. Construct kelas Mahasiswa akan dipanggil, construct kelas koneksi untuk menginisialisasi koneksi ke database.
    $perbaikan = new Perbaikan();
    // Hasil dari query disimpan dalam variabel $asli.
    $yakin = $perbaikan->tampilkanPerbaikan();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Perbaikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mahasiswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="efek_mahasiswa.php">Fitur Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perbaikan.php">Perbaikan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="efek_perbaikan.php">Fitur Perbaikan</a>
        </li>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1 class ="text-center">Perbaikan Data</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <table class = "table table-bordered table-striped table-hover">  
    <thead>
        <tr>
            <th scope="col">ID Perbaikan</th>
            <th scope="col">Tgl Perbaikan</th>
            <th scope="col">Keterangan</th>
            <th scope="col">ID Mahasiswa</th>
            <th scope="col">ID Matakuliah</th>
            <th scope="col">ID Semester</th>
            <th scope="col">ID Nilai</th>
            <th scope="col">ID Dosen</th>
        </tr>
    </thead>
  
  <?php
    // Variabel $no diinisialisasi dengan nilai 1. Ini akan digunakan untuk menampilkan nomor urut setiap baris data mahasiswa dalam tabel.
    $no=1;
    // Menggunakan loop foreach untuk iterasi melalui setiap elemen dalam array $asli.
    foreach ($yakin as $row) {
        // <?php echo $no++; menampilkan nilai $no, kemudian meningkatkan nilainya untuk iterasi berikutnya.
        // Mengakses nilai dari array $row menggunakan tgl_perbaikan, keterangan, mahasiswa_id, matkul_id, semester_id, nilai_id, dosen_id.
  ?>
  <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['tgl_perbaikan']?></td>
        <td><?php echo $row['keterangan']?></td>
        <td><?php echo $row['mahasiswa_id']?></td>
        <td><?php echo $row['matkul_id']?></td>
        <td><?php echo $row['semester_id']?></td>
        <td><?php echo $row['nilai_id']?></td>
        <td><?php echo $row['dosen_id']?></td>
    </tr>
  <?php
    }
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      </body>
      </table>
</html>