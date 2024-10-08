
<?php
require_once 'config/database.php';

class Mahasiswa
{
    private $conn;
    private $table_name = "biodata_mahasiswa";

    public $nim;
    public $nama_lengkap;
    public $alamat;
    public $jurusan;
    public $nomor_telepon;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Membaca semua data mahasiswa
    public function read()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Menambah data mahasiswa
    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " (nim, nama_lengkap, alamat, jurusan, nomor_telepon) VALUES (:nim, :nama_lengkap, :alamat, :jurusan, :nomor_telepon)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":nama_lengkap", $this->nama_lengkap);
        $stmt->bindParam(":alamat", $this->alamat);
        $stmt->bindParam(":jurusan", $this->jurusan);
        $stmt->bindParam(":nomor_telepon", $this->nomor_telepon);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Mengedit data mahasiswa
    public function update()
    {
        $query = "UPDATE " . $this->table_name . " SET nama_lengkap=:nama_lengkap, alamat=:alamat, jurusan=:jurusan, nomor_telepon=:nomor_telepon WHERE nim=:nim";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":nama_lengkap", $this->nama_lengkap);
        $stmt->bindParam(":alamat", $this->alamat);
        $stmt->bindParam(":jurusan", $this->jurusan);
        $stmt->bindParam(":nomor_telepon", $this->nomor_telepon);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Menghapus data mahasiswa
    public function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE nim=:nim";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nim", $this->nim);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Mendapatkan satu mahasiswa berdasarkan NIM
    public function getById($nim)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE nim=:nim LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nim", $nim);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
