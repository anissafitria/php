<?php
$m1 =["nim"=> "a710200094", "nama" => "anissa", "nilai" => 90];
$m2 =["nim"=> "a710200095", "nama" => "bunga", "nilai" => 92];
$m3 =["nim"=> "a710200096", "nama" => "mawar", "nilai" => 93];
$m4 =["nim"=> "a710200097", "nama" => "biru", "nilai" => 80];
$m5 =["nim"=> "a710200098", "nama" => "matahari", "nilai" => 85];
$m6 =["nim"=> "a710200099", "nama" => "senjani", "nilai" => 100];
$m7 =["nim"=> "a710200100", "nama" => "mega", "nilai" => 97];
$m8 =["nim"=> "a710200101", "nama" => "melati", "nilai" => 60];
$m9 =["nim"=> "a710200102", "nama" => "tsana", "nilai" => 40];
$m10 =["nim"=> "a710200103", "nama" => "laila", "nilai" => 56];

$head=["nomor", "nim", "nama", "keterangan", "grade", "predikat"];

$mhs= [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$nim= ["nim"];
$nama= ["nama"];
$mahasiswa= count($mhs);
$data_nilai= array_column($mhs, "nilai");
$nilai_tertinggi= max($data_nilai);
$nilai_terendah= min($data_nilai);
$total= array_sum($data_nilai);
$rerata= $total / $mahasiswa;

$keterangan = [
    "mahasiswa" => $mahasiswa,
    "nilai tertinggi" => $nilai_tertinggi,
    "nilai terendah" => $nilai_terendah,
    "rata-rata" => $rerata,
];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas PHP 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center">Rekap Mahasiswa</h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <?php
                foreach ($head as  $hd) {
                ?>
                <th> <?= $hd ?> </th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach ($mhs as $mahasiswa) {
                    $nilai=$mahasiswa["nilai"];

                    $ket=($nilai >= 60) ? "lulus" : "gagal";

                    if ($nilai >= 85 && $nilai <= 100) $grade="A";
                    else if ($nilai >= 75 && $nilai <= 85) $grade="B";
                    else if ($nilai >= 60 && $nilai <= 75) $grade="C";
                    else if ($nilai >= 30 && $nilai <= 60) $grade="D";
                    else if ($nilai >= 0 && $nilai <= 30) $grade="E";
                    else $grade = "";

                    switch ($grade) {
                        case "A" :$predikat = "Memuaskan"; break;
                        case "B" :$predikat = "Bagus"; break;
                        case "C" :$predikat = "Cukup"; break;
                        case "D" :$predikat = "Kurang"; break;
                        case "E" :$predikat = "Buruk"; break;
                        default  :$predikat = "";
                    }
                
            ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $mahasiswa["nim"] ?></td>
                <td><?= $mahasiswa["nama"] ?></td>
                <td><?= $ket ?></td>
                <td><?= $nilai ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php $nomor++;
            } ?>
            
        </tbody>
        <tfoot>
            <?php
            foreach($keterangan as $ket => $hasil){
                ?>
                <tr>
                    <th colspan="7"><?= $ket ?></th> 
                    <th><?= $hasil ?></th>
                </tr>
                <?php   
            } ?>
        </tfoot>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
  </body>
</html>

