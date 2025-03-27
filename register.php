<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (!empty($username) && !empty($password)) {
        $file = "users.txt";
        if (!file_exists($file)) {
            touch($file);
        }

        $users = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            list($storedUser, $storedPass) = explode(":", $user);
            if ($storedUser == $username) {
                echo "Username sudah digunakan!";
                exit;
            }
        }


        $handle = fopen($file, "a");
        fwrite($handle, "$username:$password\n");
        fclose($handle);

        echo "Registrasi berhasil! <a href='index.html'>Login</a>";
    } else {
        echo "Harap isi semua data!";
    }
}
?>
