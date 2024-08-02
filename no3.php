<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Masukkan Jam</label>
        <input type="number" name="jam" id="jam"> <br><br>

        <label for="">Masukkan Menit</label>
        <input type="number" name="menit" id="menit"> <br><br>

        <label for="">Masukkan Detik</label>
        <input type="number" name="detik" id="detik"> <br><br>

        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
    $j = $_POST['jam'];

    $m = $_POST['menit'];

    $d = $_POST['detik'];

    echo $j . " Jam, ". $m . " Menit, ". $d. " Detik <br>";


    $jd = $j * 3600;
    $md = $m * 60;
    $dd = $d;

    $totalDetik = $jd + $md + $dd;

    echo "Total detiknya adalah : ". $totalDetik. "detik";
}

