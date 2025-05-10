<?php
    session_start();
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password = '$password'") or die (mysqli_error($connect));

    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        echo "<script>
            alert('login berhasil');
            window.location.href = '../pages/data.php';
            </script>";
    }else{
        echo "<script>
        alert('Login Gagal');
        window.location.href = '../pages/login.php';
        </script>";
    }


?>