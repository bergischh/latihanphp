<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post" >
    <label for="i">Masukkan Bilangan 1</label>
    <input type="number" name="bil1" id="a"><br><br>

    <label for="i">Masukkan Bilangan 2</label>
    <input type="number" name="bil2" id="b"><br><br>

    <label for="i">Masukkan Bilangan 3</label>
    <input type="number" name="bil3" id="c"><br><br>

    <button type="submit" name="submit">Kirim </button> <br>
    </form>
</body>
</html>

<?php 

if (isset($_POST['submit'])) {
    $a = $_POST['bil1'];

    $b = $_POST['bil2'];

    $c = $_POST['bil3'];

    if ($a > $b && $a > $c) {
        echo $a;
    }elseif ($b > $a && $b > $c) {
        echo $b;
    }else {
        echo $c;
    }

} 


