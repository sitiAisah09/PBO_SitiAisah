<?php
class AngsuranKredit {
    private $pinjaman;
    private $bunga;
    private $lamaAngsuran;
    private $angsuran = array();

    // Setter
    public function setPinjaman($pinjaman) {
        $this->pinjaman = $pinjaman;
    }

    public function setBunga($bunga) {
        $this->bunga = $bunga;
    }

    public function setLamaAngsuran($lamaAngsuran) {
        $this->lamaAngsuran = $lamaAngsuran;
    }

    // Getter
    public function getPinjaman() {
        return $this->pinjaman;
    }

    public function getBunga() {
        return $this->bunga;
    }

    public function getLamaAngsuran() {
        return $this->lamaAngsuran;
    }

    // Fungsi untuk menghitung angsuran
    public function hitungAngsuran() {
        $bungaPerBulan = ($this->bunga / 100) * $this->pinjaman / $this->lamaAngsuran;
        $angsuranPokok = $this->pinjaman / $this->lamaAngsuran;

        for ($i = 1; $i <= $this->lamaAngsuran; $i++) {
            $angsuranBulan = $angsuranPokok + ($bungaPerBulan * ($this->lamaAngsuran - $i + 1));
            $this->angsuran[] = array(
                'bulan' => $i,
                'angsuran_pokok' => $angsuranPokok,
                'bunga' => $bungaPerBulan * ($this->lamaAngsuran - $i + 1),
                'total' => $angsuranBulan
            );
        }
    }

    // Fungsi untuk menampilkan angsuran dengan tampilan HTML yang rapi
    public function tampilkanAngsuran() {
        echo "<h3>Latihan 4</h3>";
        echo "<p><strong>TOKO PEGADAIAN SYARIAH</strong><br>";
        echo "Jl Keadilan No 16<br>";
        echo "Telp 732746238</p>";
        echo "<h4>Program Penghitung Besaran Angsuran Hutang</h4>";
        echo "<p>Besaran Pinjaman : <strong>Rp. " . number_format($this->pinjaman, 0, ',', '.') . "</strong><br>";
        echo "Masukan Besaran Bunga (%) : <strong>" . $this->bunga . "</strong><br>";
        echo "Lama Angsuran (bulan): <strong>" . $this->lamaAngsuran . "</strong></p>";

        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><th>Bulan</th><th>Angsuran Pokok</th><th>Bunga</th><th>Total Angsuran</th></tr>";

        foreach ($this->angsuran as $item) {
            echo "<tr>";
            echo "<td>" . $item['bulan'] . "</td>";
            echo "<td>Rp. " . number_format($item['angsuran_pokok'], 0, ',', '.') . "</td>";
            echo "<td>Rp. " . number_format($item['bunga'], 0, ',', '.') . "</td>";
            echo "<td>Rp. " . number_format($item['total'], 0, ',', '.') . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
}

// Inisialisasi objek
$kredit = new AngsuranKredit();

// Set data
$kredit->setPinjaman(1000000); // Jumlah pinjaman
$kredit->setBunga(10); // Bunga dalam persen
$kredit->setLamaAngsuran(5); // Lama angsuran dalam bulan

// Hitung angsuran
$kredit->hitungAngsuran();

// Tampilkan hasil dalam format HTML yang rapi
$kredit->tampilkanAngsuran();
?>
