<?php
    include "Mobil.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Belajar CI</title>
    </head>

    <body>
        <h1>Profil mobil ku</h1>
        <hr>
            <?php
                    $arr = array(
                    array("merk"=>"Honda","warna"=>"Hitam","km"=>50,"jam"=>2),
                    array("merk"=>"Audi","warna"=>"Silver","km"=>200,"jam"=>2),
                )
            ?>

            <?php
                foreach($arr as $row){
                    $objMobil = new Mobil();  //objMobil adalah objek dari class Mobil
                    $merk = $objMobil->setMerk($row["merk"]);
                    $kecepatan = $objMobil->jalan($row["km"],$row["jam"]);
                    $warna = $objMobil->setWarna($row["warna"]);
               
            ?>

            <div style='font-size:16px'>
                <div>Merk : <?php echo $merk ?></div>
                <div>Warna: <?php echo $warna ?></div>
                <div>Kecepatan: <?php echo $kecepatan ?></div>
            </div>

            <br>
            <?php
                }
                echo Mobil::ini_static();
            ?>

    </body>

</html>