<?php
// Mendapatkan data dari form
$nama = $_POST["nama"];
$email = $_POST["email"];
$pesan = $_POST["pesan"];

// Koneksi ke database
$conn = mysqli_connect("host", "username", "password", "database");

// Query untuk menambahkan data ke database
$sql = "INSERT INTO pesan (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
  echo "Pesan berhasil dikirim.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
