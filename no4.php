<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Masukkan Total Detik</label>
        <input type="number" name="totaldetik" id="totaldetik"> <br><br>

        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>

<?php 

if (isset($_POST['submit'])) {
    $totalDetik = $_POST['totaldetik'];

    $jam = floor($totalDetik / 3600);
    echo $jam. " Jam ";

    $carimenit = $totalDetik % 3600;
    $menit = floor($carimenit / 60);
    echo $menit. " Menit ";

    $detik = floor($carimenit % 60);
    echo $detik. " Detik ";



}