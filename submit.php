<?php
$email = $_POST['email'];
$password = $_POST['password'];

// Menyimpan data ke file data.txt
file_put_contents('data.txt', "Email: $email | Password: $password\n", FILE_APPEND);

echo "<h2>Data berhasil dikumpulkan!</h2>";
echo "<p>Email: $email</p>";
echo "<p>Password: $password</p>";
?>