<?php
class Mahasiswa
{
    private $nama;
    private $kelas;
    private $mataKuliah;
    private $nilai;

    // Setters
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }

    public function setMataKuliah($mataKuliah)
    {
        $this->mataKuliah = $mataKuliah;
    }

    public function setNilai($nilai)
    {
        $this->nilai = $nilai;
    }

    // Getters
    public function getNama()
    {
        return $this->nama;
    }

    public function getKelas()
    {
        return $this->kelas;
    }

    public function getMataKuliah()
    {
        return $this->mataKuliah;
    }

    public function getNilai()
    {
        return $this->nilai;
    }

    // Method untuk menentukan kelulusan
    public function getStatusKelulusan()
    {
        if ($this->nilai >= 60) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }
}

// Array data mahasiswa
$dataMahasiswa = [
    ['Adutya', 'Si 2', 'Pemrograman Berorientasi Objek', 80],
    ['Shinta', 'SI 2', 'Pemrograman Berorientasi Objek', 75],
    ['Ineu', 'Si 2', 'Pemrograman Berorientasi Objek', 55]
];


// Array untuk menyimpan objek mahasiswa
$mahasiswaList = [];

// Mengisi array mahasiswa dengan objek Mahasiswa
foreach ($dataMahasiswa as $data) {
    $mahasiswa = new Mahasiswa();
    $mahasiswa->setNama($data[0]);
    $mahasiswa->setKelas($data[1]);
    $mahasiswa->setMataKuliah($data[2]);
    $mahasiswa->setNilai($data[3]);
    $mahasiswaList[] = $mahasiswa;
}

// Menampilkan data mahasiswa
foreach ($mahasiswaList as $mahasiswa) {
    echo "Nama: " . $mahasiswa->getNama() . "<br>";
    echo "Kelas: " . $mahasiswa->getKelas() . "<br>";
    echo "Mata Kuliah: " . $mahasiswa->getMataKuliah() . "<br>";
    echo "Nilai: " . $mahasiswa->getNilai() . "<br>";
    echo "Status: " . $mahasiswa->getStatusKelulusan() . "<br><br>";
}
?>