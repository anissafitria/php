<!doctype html>
<html lang= "en">

<head>
    <meta charset="utf-8>
    <meta name= "viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>

<?php
    require_once 'Lingkaran.php';
    require_once 'PersegiPanjang.php';
    require_once 'Segitiga.php';

    $thead =["No", "Nama Bidang", "Keterangan", "Luas Bidang", "Keliling"];

    $no = 1;
    ?>
    <div class="container">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <?php
                foreach ($thead as $judul) {?>
                <th><?= $judul ?></th> 
                <?php } ?>
            </tr>
        </thead>
        <tbody>
    <?php
    $lingkaran = new Lingkaran('5');
    $persegi_panjang = new PersegiPanjang('10', '20');
    $segitiga = new Segitiga('10', '5', '12', '16', '18');

    $bidang = [$lingkaran, $persegi_panjang, $segitiga];
    $no = 1;

    foreach ($bidang as $bd) {
        $namaBidang = $bd->namaBidang();
        $luasbidang = $bd->luasBidang();
        $kelilingbidang = $bd->kelilingBidang();

        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $namaBidang ?></td>
            <td><?= $luasbidang ?></td>
            <td><?= $kelilingbidang ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    </table>
 </div>  


</body>
</html> 