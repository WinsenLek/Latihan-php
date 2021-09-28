<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan operator</title>
</head>
<body>
    <?php
    
    $bil1 = 500;
    $bil2 = 5;

    $text1 = "Nama";
    $text2 = "saya";
    $text3 = "Wina";

    echo "Operator Penjumlahan <br>";
    $hasil = $bil1 + $bil2;
    echo "$bil1 + $bil2 = $hasil <br>";

    $hasil = $bil1 - $bil2;
    echo  "$bil1 - $bil2 = $hasil <br>";

    $hasil = $bil1 * $bil2;
    echo  "$bil1 x $bil2 = $hasil <br>";

    $hasil = $bil1 / $bil2;
    echo  "$bil1 : $bil2 = $hasil <br>";
    
    echo "<br>";

    echo "Operator Perbandingan <br>";
    $hasil = $bil1 == $bil2;
    echo "$bil1 == $bil2 = $hasil <br>";

    $hasil = $bil1 != $bil2;
    echo "$bil1 =! $bil2 = $hasil <br>";

    $hasil = $bil1 >= $bil2;
    echo "$bil1 >= $bil2 = $hasil <br>";
    
    $hasil = $bil1 <= $bil2;
    echo "$bil1 <= $bil2 = $hasil <br>";

    echo "<br>";

    echo "Operator String <br>";
    $hasil =$text1 . $text2 . $text3;
    echo "$hasil";


     ?>
</body>
</html>