<?php
require 'config1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $mobil = $_POST['mobil'];
    $harga = $_POST['harga'];
    $tanggal = date("Y-m-d");

    $sql = "INSERT INTO transaksi (nama, email, no_hp, mobil, harga, tanggal)
    VALUES ('$nama', '$email', '$no_hp', '$mobil', '$harga', '$tanggal')";

    if ($conn->query($sql) === TRUE) {
        header("Location: selesai.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
