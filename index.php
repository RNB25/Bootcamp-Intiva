<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://jagongoding.com/images/jagongoding-logo-845.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>JagoKoding | Academy</title>
</head>

<body>
    <!-- As a Navbar -->
    <nav class="navbar navbar-light" id="nav">
        <span class="navbar-brand mb-0 h1">JK-Academy</span>
    </nav>
    <div class="content">
        <h2 style="text-align: center;">Input data mahasiswa</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="box">
                <label for="nilai">Masukkan nilai mahasiswa</label>
                <input type="number" id="nilai" name="nilai">
            </div>
            <input type="submit" value="Proses">
            <!-- <center> -->
            <h3><?php
                $nilai = @$_POST["nilai"];
                if($nilai != NULL){

                    if($nilai < 45 ){
                        echo ("Nilai : D, Tidak Lulus");
                    }
                    else if($nilai == 45){
                        echo ("Nilai : C, Cukup");
                    }
                    else if($nilai > 45 && $nilai <= 70){
                        echo ("Nilai : B, Baik");
                    }
                    else if($nilai > 70){
                        echo ("Nilai : A, Mantab!");
                    }
                }
                else{
                    echo("Masukkan nilai untuk melihat index");
                }
                ?></h3>
            <!-- </center> -->
        </form>
    </div>
</body>

</html>