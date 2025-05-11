<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $token = $_POST['token'];
    $newPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $conn = new mysqli('localhost', 'root', '', 'project04');
    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    // Verifikasi token dan email
    $stmt = $conn->prepare("SELECT * FROM password_resets WHERE email=? AND token=?");
    $stmt->bind_param("ss", $email, $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Update password
        $stmt = $conn->prepare("UPDATE users SET password=? WHERE email=?");
        $stmt->bind_param("ss", $newPassword, $email);
        if ($stmt->execute()) {
            echo "Password berhasil diupdate.";
        } else {
            echo "Gagal mengupdate password.";
        }

        // Hapus token reset password setelah digunakan
        $stmt = $conn->prepare("DELETE FROM password_resets WHERE email=?");
        $stmt->bind_param("ss", $email);
        $stmt->execute();
    } else {
        echo "Token tidak valid atau telah kedaluwarsa.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Akses tidak sah.";
}
?>
