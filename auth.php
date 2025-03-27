<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (!empty($username) && !empty($password)) {
        $file = "users.txt";

        if (!file_exists($file)) {
            echo "Belum ada pengguna terdaftar!";
            exit;
        }

        $users = file($file, FILE_IGNORE_NEW_LINES);
        $validUser = false;

        foreach ($users as $user) {
            list($storedUser, $storedPass) = explode(":", $user);
            if ($storedUser == $username && $storedPass == $password) {
                $validUser = true;
                break;
            }
        }

        if ($validUser) {
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Username atau password salah!";
        }
    } else {
        echo "Harap isi semua data!";
    }
}
?>
