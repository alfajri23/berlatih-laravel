<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function pasangan_terbesar($angkas){
    // kode di sini
        $angka="$angkas";
        $hasil="";
        $besar="";
            for($i=0;$i<=strlen($angka)-2;$i++){
                $y = $i + 1;
                $hasil = "$angka[$i]$angka[$y]";
                
                if($besar>$hasil){
                    $besar=$besar;
                }
                else{
                    $besar=$hasil;
                }
            }
        return $besar."<br>";   
    }

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>
</body>
</html>