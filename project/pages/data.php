<?php
    session_start();
    include "../proses/koneksi.php";
    $result = mysqli_query($connect, "SELECT * FROM obat");
        if(!$result){
            die('data kosong' . mysqli_error($connect));
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h5 align="center">Hi!! <?= $_SESSION['username']; ?></h5>
    <h1>tess</h1>
</body>
</html>