<?php

class Mahasiswa_model {
    // membuat data mahasiswa menggunakan Array
    // private $mhs = [
    //     [
    //         "nama" => "Syahdan Masyhuri",
    //         "npm" => "123456789",
    //         "email" => "syahdanmasyhuri@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Enden Kurnaeli",
    //         "npm" => "987654321",
    //         "email" => "endenkurnaeli@gmail.com",
    //         "jurusan" => "Management Informatika"
    //     ]
    // ];

    private $dbh; // database handler
    private $stmt;

    // koneksi ke database
    public function __construct() {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, "root", "");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        // membuat query
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}