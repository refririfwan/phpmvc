<?php
class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Refri Rifwan",
    //         "nim" => "1551502012345",
    //         "jurusan" => "Teknik Informatika",
    //         "email" => "email@student.com",
    //         "gambar" => "sp.jpeg"
    //     ],
    //     [
    //         "nama" => "Jayakarta",
    //         "nim" => "15515024323445",
    //         "jurusan" => "Teknik Kimia",
    //         "email" => "jayakarta@student.com",
    //         "gambar" => "s.jpeg"
    //     ],
    //     [
    //         "nama" => "Kasibuana",
    //         "nim" => "12345232445553",
    //         "jurusan" => "Teknik Elektro",
    //         "email" => "kasihbuana@student.com",
    //         "gambar" => "ps.jpeg"
    //     ]
    // ];

    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpdasar';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
