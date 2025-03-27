<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $data = $username . "," . $password . "\n"; // Format: username,password

        // Simpan ke users.txt
        $file = "users.txt"; // Nama file
        file_put_contents($file, $data, FILE_APPEND); // Tambah ke file

        echo "Registrasi berhasil! Silakan login.";
    } else {
        echo "Username dan password tidak boleh kosong!";
    }
}
?>
