<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan IF</title>
</head>
<body>
    <?php
    $nilai = 95;
    $nama = "ChenHuiNa";

    if($nilai >= 80){
        echo $nama . " Mendapatkan nilai $nilai <br>";
        echo "Predikat A" ;
    }
    elseif($nilai >= 70){
        echo $nama . " Mendapatkan nilai $nilai <br>";
        echo "Predikat B" ;
    }
    elseif($nilai >= 60){
        echo $nama . " Mendapatkan nilai $nilai <br>";
        echo "Predikat C" ;
    }
    else{
        echo $nama . " Mendapatkan nilai $nilai <br>";
        echo "Predikat D" ;
    }
    ?>

</body>
</html>