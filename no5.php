<?php

for ($i=1; $i <= 50; $i++) { 
    if ($i % 2) {
        $ganjil = $i;
        echo $ganjil. " Ganjil <br>";
    }else {
        $genap = $i;
        echo $genap. " Genap <br>";
    }
}