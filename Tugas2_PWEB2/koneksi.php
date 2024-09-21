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