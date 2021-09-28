<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan for</title>
</head>
<body>
    tanggal lahir :
    <select name="tanggal" id="">
        <option value="0" selected>Tanggal
   <?php

   for($i = 0; $i < 32; $i++)
        echo "<option value = $i > $i";
   
    echo "<br> <br>";

    
    
    

    ?>
        </option>
    </select>
    
</body>
</html>
