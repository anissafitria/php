<?php
require "tgs4_php_Anissa Fitria Sari_Universitas Muhammadiyah Surakarta_Syakir.php";
$p1 = [221, "Anissa","Manager","Menikah","Islam"];
$p2 = [232, "Matahari","Asisten Manager","Menikah","Islam"];
$p3 = [243, "Bintang","Staff","Menikah","Katolik"];
$p4 = [251, "Bulan","Kabag"," Belum Menikah","Kristen"];
$p5 = [261, "Biru","Asisten Manager","Belum Menikah","Islam"];
$dataPegawai = [$p1,$p2,$p3,$p4,$p5];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5 mb-1">
            <?= Pegawai:: PT ?>
        </h1>
        <div class="row">
        <?php
        foreach ($dataPegawai as $dpeg) {
            $dpeg = new Pegawai($dpeg[0],$dpeg[1],$dpeg[2],$dpeg[3],$dpeg[4]);
            $dpeg->setCetak();
        }
        ?>
        </div>
        <h5>
            Jumlah Pegawai: <?= Pegawai::$no - 1 ?>
        </h5>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</body>
</html>