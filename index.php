<?php
// 1. Membuat array berisi angka 1 sampai 20
$angka = range(1, 20);

echo "Angka dari 1 sampai 20 yang habis dibagi 3 adalah: <br>";

// 2. Menggunakan perulangan (foreach) untuk mengecek setiap elemen array
foreach ($angka as $nilai) {
    // 3. Menggunakan percabangan (if) untuk menyaring angka yang habis dibagi 3
    if ($nilai % 3 == 0) {
        echo $nilai . "<br>";
    }
}
?>