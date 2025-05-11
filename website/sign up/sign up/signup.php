<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project04";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengamankan input
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Hashing password sebelum menyimpannya
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Menambahkan tanggal login saat ini
    $tanggal_login = date("Y-m-d H:i:s");

    // Query SQL untuk memasukkan data pengguna ke tabel admin
    $sql = "INSERT INTO admin (username, password, tanggal_login) VALUES ('$user', '$hashed_password', '$tanggal_login')";

    if (mysqli_query($conn, $sql)) {
        echo "Pendaftaran berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Debugging: Menampilkan nilai yang dimasukkan
    echo "<br>Debugging Info:<br>";
    echo "Username: $user<br>";
    echo "Password: $password<br>";
    echo "Hashed Password: $hashed_password<br>";
    echo "Tanggal Login: $tanggal_login<br>";

    mysqli_close($conn);
} else {
    echo "Form tidak dikirim dengan benar.";
}
?>
