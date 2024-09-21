<?php
    // require_once digunakan untuk menyertakan file
    require_once "koneksi.php";
    //Instalisasi Objek dari kelas Mahasiswa. Construct kelas Mahasiswa akan dipanggil, construct kelas koneksi untuk menginisialisasi koneksi ke database.
    $maha = new Mahasiswa();
    // Hasil dari query disimpan dalam variabel $asli.
    $asli = $maha->tampilkanMahasiswa();

?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <h1 class ="text-center">Data Mahasiswa</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id Mahasiswa</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">Email</th>
      <th scope="col">No Telefon</th>
    </tr>
  </thead>
  <body>
  </body>
    <?php
    // Variabel $no diinisialisasi dengan nilai 1. Ini akan digunakan untuk menampilkan nomor urut setiap baris data mahasiswa dalam tabel.
    $no=1;
    // Menggunakan loop foreach untuk iterasi melalui setiap elemen dalam array $asli.
    foreach ($asli as $row){
        // <?php echo $no++; menampilkan nilai $no, kemudian meningkatkan nilainya untuk iterasi berikutnya.
        // Mengakses nilai dari array $row menggunakan nim, nama_mhs, alamat, email, dan no_telp.
    ?>
    <tr>
        
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['nim']?></td>
        <td><?php echo $row['nama_mhs']?></td>
        <td><?php echo $row['alamat']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['no_telp']?></td>
    </tr>
    <?php
    }
    ?>
</html>