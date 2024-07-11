<?php
session_start();
include "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_SESSION['Id']) || empty($_SESSION['Id'])) {
        echo "<script>alert('Session Id tidak ditemukan. Silakan login kembali.');</script>";
        exit();
    }

    $Id = $_POST['Id'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $jumlah_dewasa = $_POST['jumlah_dewasa'];
    $jumlah_anak = $_POST['jumlah_anak'];
    $jumlah_bayi = $_POST['jumlah_bayi'];
    $jenis_pembayaran = $_POST['payment'];
    $total_harga = $_POST['total_harga'];

    // Gunakan prepared statement untuk mencegah SQL injection
    $check_user_query = "SELECT * FROM users WHERE Id = ?";
    $stmt = $conn->prepare($check_user_query);
    $stmt->bind_param("i", $Id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Insert into transaksi table
        $insert_query = "INSERT INTO transaksi (Id, tanggal, jam, jumlah_dewasa, jumlah_anak, jumlah_bayi, jenis_pembayaran, total_harga) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("issssssd", $Id, $tanggal, $jam, $jumlah_dewasa, $jumlah_anak, $jumlah_bayi, $jenis_pembayaran, $total_harga);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Booking Anda Berhasil !!');
                    document.location='confirmed.php';
                </script>";
            exit();
        } else {
            echo "<script>
                    alert('Error saat menyimpan transaksi.');
                    document.location='pembayaran1.php';
                </script>";
            exit();
        }
    } else {
        echo "<script>
                alert('User ID tidak valid atau tidak ditemukan.');
                document.location='pembayaran1.php';
            </script>";
        exit();
    }

    $stmt->close();
} else {
    echo "<script>
            alert('Metode tidak diizinkan.');
            document.location='pembayaran1.php';
        </script>";
    exit();
}
$conn->close();