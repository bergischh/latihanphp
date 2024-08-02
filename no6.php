<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Masukkan Nilai 1</label>   
        <input type="number" name="bil1" id="bil1"><br><br>

        <label for="">Masukkan Nilai 2</label>   
        <input type="number" name="bil2" id="bil2"><br><br>

        <label for="">Masukkan Nilai 3</label>   
        <input type="number" name="bil3" id="bil3"><br><br>

        <label for="">Masukkan Nilai 4</label>   
        <input type="number" name="bil4" id="bil4"><br><br>

        <label for="">Masukkan Nilai 5</label>   
        <input type="number" name="bil5" id="bil5"><br><br>

        <label for="">Masukkan Nilai 6</label>   
        <input type="number" name="bil6" id="bil6"><br><br>

        <label for="">Masukkan Nilai 7</label>   
        <input type="number" name="bil7" id="bil7"><br><br>

        <label for="">Masukkan Nilai 8</label>   
        <input type="number" name="bil8" id="bil8"><br><br>

        <label for="">Masukkan Nilai 9</label>   
        <input type="number" name="bil9" id="bil9"><br><br>

        <label for="">Masukkan Nilai 10</label>   
        <input type="number" name="bil10" id="bil10"><br><br>\
        
        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>

<?php 

if (isset($_POST['submit'])) {
   $bil1 = $_POST['bil1'];
   $bil2 = $_POST['bil2'];
   $bil3 = $_POST['bil3'];
   $bil4 = $_POST['bil4'];
   $bil5 = $_POST['bil5'];
   $bil6 = $_POST['bil6'];
   $bil7 = $_POST['bil7'];
   $bil8 = $_POST['bil8'];
   $bil9 = $_POST['bil9'];
   $bil10 = $_POST['bil10'];

   
}