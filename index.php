<?php
include "biodata.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Biodata Saya</h1>

    <img src="hadae.jpeg" alt="Gambar Profil" class="profile-pic">

    <p><b>Nama:</b> <span><?= $name ?></span></p>
    <p><b>No Matrik:</b> <span><?= $nomatrik ?></span></p>
    <p><b>Kelas:</b> <span><?= $kelas ?></span></p>

</body>
</html>
