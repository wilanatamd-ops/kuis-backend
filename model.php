<?php

// Class Buku
class Buku {
    private $idBuku;
    private $judul;
    private $penulis;
    private $stok;

    public function __construct($idBuku, $judul, $penulis, $stok) {
        $this->idBuku = $idBuku;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->stok = $stok;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getStok() {
        return $this->stok;
    }

    public function kurangiStok() {
        if ($this->stok > 0) {
            $this->stok--;
        }
    }

    public function infoBuku() {
        return "ID Buku: {$this->idBuku} | Judul: {$this->judul} | Penulis: {$this->penulis} | Stok: {$this->stok}";
    }
}

// Class Anggota
class Anggota {
    private $idAnggota;
    private $nama;
    private $alamat;

    public function __construct($idAnggota, $nama, $alamat) {
        $this->idAnggota = $idAnggota;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function getNama() {
        return $this->nama;
    }

    public function infoAnggota() {
        return "ID Anggota: {$this->idAnggota} | Nama: {$this->nama} | Alamat: {$this->alamat}";
    }
}

// Class Peminjaman (Berelasi dengan Buku dan Anggota)
class Peminjaman {
    private $idPeminjaman;
    private $anggota; // Objek dari Class Anggota
    private $buku;    // Objek dari Class Buku
    private $tanggalPinjam;

    public function __construct($idPeminjaman, Anggota $anggota, Buku $buku, $tanggalPinjam) {
        $this->idPeminjaman = $idPeminjaman;
        $this->anggota = $anggota;
        $this->buku = $buku;
        $this->tanggalPinjam = $tanggalPinjam;
        
        // Mengurangi stok buku saat dipinjam
        $this->buku->kurangiStok();
    }

    public function infoPeminjaman() {
        echo "=== Detail Peminjaman ===<br>";
        echo "ID Peminjaman: {$this->idPeminjaman}<br>";
        echo "Peminjam: " . $this->anggota->getNama() . "<br>";
        echo "Buku yang Dipinjam: " . $this->buku->getJudul() . "<br>";
        echo "Tanggal Pinjam: {$this->tanggalPinjam}<br>";
        echo "Sisa Stok Buku: " . $this->buku->getStok() . "<br>";
    }
}

// ==========================================
// CONTOH IMPLEMENTASI / PENGGUNAAN KODE
// ==========================================

// 1. Membuat objek Buku
$buku1 = new Buku("B001", "Pemrograman PHP untuk Pemula", "Budi Raharjo", 5);

// 2. Membuat objek Anggota
$anggota1 = new Anggota("A001", "Siti Aminah", "Jl. Merdeka No. 10");

// 3. Menampilkan informasi awal
echo "<h3>Data Awal:</h3>";
echo $buku1->infoBuku() . "<br>";
echo $anggota1->infoAnggota() . "<br><br>";

// 4. Melakukan Peminjaman Buku
$peminjaman1 = new Peminjaman("P001", $anggota1, $buku1, "2026-06-07");

// 5. Menampilkan informasi peminjaman
$peminjaman1->infoPeminjaman();

?>