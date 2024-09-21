# Tugaa2
# Pengertian OOP
OOP, atau Pemrograman Berorientasi Objek, adalah paradigma pemrograman yang menggunakan "objek" untuk mengembangkan aplikasi. Dalam OOP, objek adalah instansi dari kelas, yang dapat berisi data (atribut) dan fungsi (metode) yang dapat mengoperasikan data tersebut.

Konsep Dasar OOP
Ada empat konsep utama dalam OOP:

Kelas (Class):

Kelas adalah cetak biru untuk membuat objek. Kelas mendefinisikan atribut dan metode yang akan dimiliki oleh objek yang dihasilkan.
Contoh: Sebuah kelas Mobil bisa memiliki atribut seperti warna, merk, dan metode seperti jalan().
Objek (Object):

Objek adalah instansi dari kelas. Setiap objek dapat memiliki nilai yang berbeda untuk atribut yang sama.
Contoh: mobil1 dan mobil2 bisa menjadi objek dari kelas Mobil, dengan warna dan merk yang berbeda.
Enkapsulasi (Encapsulation):

Enkapsulasi adalah konsep yang menyembunyikan detail implementasi dari objek dan hanya menampilkan antarmuka yang diperlukan. Hal ini membantu melindungi data.
Contoh: Menggunakan modifier akses seperti private, protected, dan public untuk mengatur visibilitas atribut dan metode.
Pewarisan (Inheritance):

Pewarisan adalah mekanisme di mana satu kelas (subkelas) dapat mewarisi atribut dan metode dari kelas lain (superkelas). Ini memungkinkan kode untuk digunakan kembali dan mempercepat pengembangan.
Contoh: Kelas Kendaraan dapat menjadi superkelas, sementara Mobil dan Sepeda adalah subkelas yang mewarisi dari Kendaraan.
Polimorfisme (Polymorphism):

Polimorfisme memungkinkan objek untuk diperlakukan sebagai instansi dari kelas super. Hal ini memungkinkan metode dengan nama yang sama untuk digunakan di kelas yang berbeda dengan cara yang berbeda.
Contoh: Metode jalan() bisa diimplementasikan berbeda di kelas Mobil dan Sepeda.
Keuntungan OOP
Reusabilitas: Kode dapat digunakan kembali melalui pewarisan dan komposisi.
Modularitas: Kode lebih terstruktur dan lebih mudah dikelola.
Abstraksi: Detail kompleks dapat disembunyikan, sehingga lebih mudah untuk memahami antarmuka objek.
Perawatan: Kode yang lebih terorganisir membuat perawatan dan pengembangan lebih mudah.
```sh
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</html>
<?php
    // Membuat class koneksi 
    class koneksi {
    // Membuat properti didalam class dengan nama hos
        public $host = "localhost"; //public $host = "localhost"; Menyimpan nama host dari server database. "localhost" database dengan server PHP.
        public $user = "root"; // public $user = "root"; Menyimpan nama pengguna (username) untuk mengakses database. "root" adalah pengguna default untuk MySQL.
        public $password = ""; // public $password = ""; Menyimpan kata sandi untuk pengguna database. kata sandinya kosong hanya digunakan untuk pengembangan lokal.
        public $db = "Tugas 2"; // public $db = "Tugas 2";: Menyimpan nama database yang akan digunakan. Nama Database nya adalah "Tugas 2".
        protected $koneksi; // protected $koneksi; Mendeklarasikan variabel $koneksi yang akan digunakan untuk menyimpan objek koneksi database. (protected) hanya bisa diakses oleh kelas ini dan kelas turunannya.
    // Membuat methode dangan nama methode construct
    // Construct dari kelas. Metode ini otomatis dipanggil saat membuat objek baru dari kelas. Untuk menginisialisasi objek.
    public function __construct() {
        // $this->koneksi: Mengacu pada variabel koneksi yang telah dideklarasikan sebelumnya dalam kelas. Akan menyimpan objek koneksi ke database.
        $this->koneksi  
        // Membuat objek baru dari kelas mysqli, cara untuk berinteraksi dengan database MySQL menggunakan ekstensi MySQLi Improved.
        = new mysqli
        // Untuk menyediakan informasi, nama pengguna, kata sandi, nama database yang mau dipanggil.
        ($this->host, $this->user, $this->password, $this->db);
    }   
}

    // Membuat class turunan Mahasiswa dengan mewarisi dari class koneksi.
    class Mahasiswa extends koneksi{
        // construct dari kelas. Di dalam construct Mahasiswa, ada pemanggilan parent::__construct(). Bahwa saat objek Mahasiswa dibuat, construct dari kelas induk (koneksi) juga akan dipanggil, yang akan menginisialisasi koneksi ke database.
        public function __construct()
        {
            parent::__construct();
        }
        // Membuat methode dengan nama methode tampilkanMahasiswa.
        // Metode ini digunakan untuk mengambil semua data dari tabel Mahasiswa.
        public function tampilkanMahasiswa(){
            $mahasi = "SELECT * FROM Mahasiswa"; //Untuk memilih kolom dari tabel Mahasiswa.
            return mysqli_query($this->koneksi, $mahasi); // Untuk menjalankan query pada koneksi database.
        }
        // Membuat methode dengan nama methode tampilkanMahasiswaEmail
        // Metode ini digunakan untuk mengambil data mahasiswa yang memiliki alamat email tertentu.
        public function tampilkanMahasiswaEmail() {
            $mahasi = "SELECT * FROM Mahasiswa WHERE Email = 'sidiqqputraa29@gmail.com'"; // $mahasi berisi perintah SQL yang memfilter hasil berdasarkan email yang ditentukan.
            return mysqli_query($this->koneksi, $mahasi); // Untuk menjalankan query pada koneksi database
        }
    }
    // Membuat class turunan Perbaikan dengan mewarisi dari class koneksi.
    class Perbaikan extends koneksi{
        // construct dari kelas. Di dalam construct Mahasiswa, ada pemanggilan parent::__construct(). Bahwa saat objek Mahasiswa dibuat, construct dari kelas induk (koneksi) juga akan dipanggil, yang akan menginisialisasi koneksi ke database.
        public function __construct()
        {
            parent::__construct();
        }
        // Membuat methode dengan nama methode tampilkanMahasiswaEmail.
        // Metode ini digunakan untuk mengambil semua data dari tabel Perbaikan.
        public function tampilkanPerbaikan(){
            $perbaikan = "SELECT * FROM nilai_perbaikan"; // $perbaikan untuk memilih kolom dari tabel perbaikan
            return mysqli_query($this->koneksi, $perbaikan); // / Untuk menjalankan query pada koneksi database.
        }
        // Membuat methode dengan nama methode tampilkanPerbaikanSemester.
        // Metode ini digunakan untuk mengambil data Perbaikan yang memiliki alamat email tertentu.
        public function tampilkanPerbaikanSemester(){
            $perbaikan = "SELECT * FROM nilai_perbaikan WHERE keterangan = 'Lulus'"; // $perbaikan berisi perintah SQL yang memfilter hasil berdasarkan keterangan yang ditentukan.
            return mysqli_query($this->koneksi, $perbaikan); // Untuk menjalankan query pada koneksi database
        }
    }
?>
```
# Output 
![image](https://github.com/user-attachments/assets/4df3b9eb-a694-4efb-8ae7-8127338e537d)
# Penjelasan
Kelas koneksi: Mengelola koneksi ke database dengan parameter host, user, password, dan nama database.
Kelas Mahasiswa: Menyediakan metode untuk mengambil data mahasiswa dari tabel Mahasiswa.
Kelas Perbaikan: Menyediakan metode untuk mengambil data dari tabel nilai_perbaikan.
# Membuat Data Mahasiswa
```sh
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
```
# Output
![image](https://github.com/user-attachments/assets/a5e41a89-7ac5-4145-ab59-5c7dfaba2c45)
# Penjelasan
Kode ini bertujuan untuk menampilkan daftar mahasiswa dari database dalam format tabel HTML. Data diambil menggunakan kelas Mahasiswa, dan tampilan diatur dengan Bootstrap. Tabel menampilkan informasi dasar seperti NIM, nama, alamat, email, dan nomor telepon mahasiswa.
# Data Fitur Mahasiswa
```sh
<?php
    // require_once digunakan untuk menyertakan file.
    require_once "koneksi.php";

    //Instalisasi Objek dari kelas Mahasiswa. Construct kelas Mahasiswa akan dipanggil, construct kelas koneksi untuk menginisialisasi koneksi ke database.
    $maha = new Mahasiswa();
    // Hasil dari query disimpan dalam variabel $asli.
    $asli = $maha->tampilkanMahasiswaEmail();
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
  <tbody>
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
```
# Output
![image](https://github.com/user-attachments/assets/46d9028b-8672-4f82-b601-8532ed5ddc5b)
# Penjelasan
Inklusi File Koneksi:

Mengimpor file koneksi.php yang berisi kelas untuk menghubungkan aplikasi dengan database.
Instansiasi Objek Mahasiswa:

Membuat objek baru dari kelas Mahasiswa, yang secara otomatis menginisialisasi koneksi ke database.
Pengambilan Data Mahasiswa:

Memanggil metode tampilkanMahasiswaEmail() untuk mengambil data mahasiswa berdasarkan email tertentu, hasilnya disimpan dalam variabel $asli.
Struktur HTML:

Menggunakan HTML untuk membuat tampilan halaman. Bootstrap digunakan untuk styling, dan DataTables untuk potensi pengelolaan tabel.
Navbar ditampilkan di bagian atas halaman dengan tautan ke beberapa halaman lain.
Judul Halaman:

Judul "Data Mahasiswa" ditampilkan di tengah halaman.
Tabel untuk Data Mahasiswa:

Tabel dibuat dengan kolom untuk ID mahasiswa, NIM, nama, alamat, email, dan nomor telepon.
Data diisi menggunakan loop foreach untuk iterasi melalui hasil query, menampilkan setiap atribut mahasiswa.
Penutupan HTML:

Tabel diisi dengan data mahasiswa yang diambil, dan kode HTML ditutup.
Kesimpulan
Kode ini menghubungkan aplikasi ke database untuk menampilkan data mahasiswa berdasarkan email tertentu dalam format tabel yang terstruktur dengan baik, menggunakan Bootstrap untuk penataan visual.

# Data Nilai Perbaikan
```sh
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
```
# Output
![image](https://github.com/user-attachments/assets/08154adb-872e-49f5-86d4-bd968ef0e9a4)
# Penjelasan Inklusi File Koneksi:

Mengimpor file koneksi.php untuk menghubungkan aplikasi ke database.
Instansiasi Objek Perbaikan:

Membuat objek dari kelas Perbaikan, yang menginisialisasi koneksi ke database.
Memanggil metode tampilkanPerbaikan() untuk mengambil data perbaikan dan menyimpannya dalam variabel $yakin.
Struktur HTML:

Menggunakan HTML untuk menampilkan halaman dengan Bootstrap untuk styling.
Navbar disediakan di bagian atas dengan tautan ke berbagai halaman terkait mahasiswa dan perbaikan.
Judul Halaman:

Judul "Perbaikan Data" ditampilkan di tengah halaman.
Tabel untuk Data Perbaikan:

Tabel dibuat untuk menampilkan informasi tentang perbaikan, termasuk ID perbaikan, tanggal perbaikan, keterangan, dan berbagai ID terkait (mahasiswa, mata kuliah, semester, nilai, dan dosen).
Data diisi menggunakan loop foreach untuk menampilkan setiap atribut dari hasil query.
Penutupan HTML:

Tabel ditutup dengan data yang diambil dari database, dan elemen HTML ditutup.
Kesimpulan
Kode ini berfungsi untuk mengambil dan menampilkan data perbaikan dari database dalam format tabel yang terstruktur, menggunakan Bootstrap untuk penataan visual. Halaman ini memungkinkan pengguna untuk melihat informasi detail tentang perbaikan yang dilakukan.
# Data Fitur Nilai Perbaikan
```sh
<?php
    // require_once digunakan untuk menyertakan file.
    require_once "koneksi.php";

    $perbaikan = new Perbaikan();
    $yakin = $perbaikan->tampilkanPerbaikanSemester();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Perbaikan</title>
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
<h1 class ="text-center">Perbaikan Data</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <table class = "table table-bordered table-striped table-hover">  
</body>
  <table class = "table">
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
    <body>
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
    </body>
    </table>
</html>
```
# Output
![image](https://github.com/user-attachments/assets/784e9e12-cc8b-4a08-9027-1c643e90e7db)
# Penjelasan
Inklusi File Koneksi:

Mengimpor file koneksi.php untuk menghubungkan aplikasi ke database.
Instansiasi Objek Perbaikan:

Membuat objek dari kelas Perbaikan dan memanggil metode tampilkanPerbaikanSemester() untuk mengambil data perbaikan semester, lalu menyimpannya dalam variabel $yakin.
Struktur HTML:

Menggunakan HTML untuk menampilkan halaman dengan Bootstrap untuk styling.
Navbar berisi tautan ke berbagai halaman terkait mahasiswa dan perbaikan.
Judul Halaman:

Menampilkan judul "Perbaikan Data" di tengah halaman.
Tabel untuk Data Perbaikan:

Tabel dibuat untuk menampilkan informasi perbaikan dengan kolom seperti ID Perbaikan, Tanggal Perbaikan, Keterangan, dan ID terkait (Mahasiswa, Mata Kuliah, Semester, Nilai, Dosen).
Data diisi menggunakan loop foreach untuk menampilkan setiap atribut dari hasil query.
Penutupan HTML:

Tabel ditutup dengan data yang diambil dari database, dan elemen HTML lainnya ditutup dengan benar.
Kesimpulan
Kode ini bertujuan untuk mengambil dan menampilkan data perbaikan berdasarkan semester dari database dalam format tabel yang terstruktur. Halaman ini memberikan pengguna akses untuk melihat detail informasi terkait perbaikan yang dilakukan, dilengkapi dengan navigasi yang memudahkan akses ke halaman lain.










