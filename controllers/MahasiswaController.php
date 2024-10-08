
<?php
require_once 'models/Mahasiswa.php';

class MahasiswaController
{
    private $model;

    public function __construct()
    {
        $this->model = new Mahasiswa();
    }

    // Menampilkan semua data mahasiswa
    public function index()
    {
        $mahasiswas = $this->model->read();
        include 'views/mahasiswa/index.php';
    }

    // Menampilkan formulir tambah data
    public function create()
    {
        include 'views/mahasiswa/create.php';
    }

    // Menyimpan data mahasiswa baru
    public function store()
    {
        $this->model->nim = $_POST['nim'];
        $this->model->nama_lengkap = $_POST['nama_lengkap'];
        $this->model->alamat = $_POST['alamat'];
        $this->model->jurusan = $_POST['jurusan'];
        $this->model->nomor_telepon = $_POST['nomor_telepon'];
        $this->model->create();
        header('Location: index.php');
    }

    // Menampilkan formulir edit data
    public function edit($nim)
    {
        $mahasiswa = $this->model->getById($nim);
        include 'views/mahasiswa/edit.php';
    }

    // Memperbarui data mahasiswa
    public function update($nim)
    {
        $this->model->nim = $nim;
        $this->model->nama_lengkap = $_POST['nama_lengkap'];
        $this->model->alamat = $_POST['alamat'];
        $this->model->jurusan = $_POST['jurusan'];
        $this->model->nomor_telepon = $_POST['nomor_telepon'];
        $this->model->update();
        header('Location: index.php');
    }

    // Menghapus data mahasiswa
    public function delete($nim)
    {
        $this->model->nim = $nim;
        $this->model->delete();
        header('Location: index.php');
    }
}
