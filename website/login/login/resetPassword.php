<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format email tidak valid";
        exit;
    }

    $token = bin2hex(random_bytes(32));

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'project04');
    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    // Simpan token ke database
    $stmt = $conn->prepare("INSERT INTO password_resets (email, token) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $token);
    $stmt->execute();
    $stmt->close();

    // Buat URL reset password
    $resetLink = "http://localhost/resetForm.php?email=" . urlencode($email) . "&token=" . urlencode($token);

    // Kirim email dengan link reset password
    $subject = "Reset Password";
    $message = "Klik link ini untuk mereset password Anda: <a href='$resetLink'>Reset Password</a>";
    $headers = "From: your_email@example.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($email, $subject, $message, $headers)) {
        echo "Email telah dikirim. Silakan periksa kotak masuk Anda.";
    } else {
        echo "Gagal mengirim email.";
    }

    $conn->close();
} else {
    echo "Akses tidak sah.";
}
?>
