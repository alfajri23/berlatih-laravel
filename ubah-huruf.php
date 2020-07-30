<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function ubah_huruf($string){
//kode di sini
$ubah=strtolower($string);
$huruf = range('a','z');
$baru = range('b','z');
$kata = array();


    for($i=0;$i<strlen($ubah);$i++){
        for($j=0;$j<sizeof($baru);$j++){
            if ($ubah[$i]==$huruf[$j]){
                array_push($kata,$j);
            }
        }
    }
    $hasil = "";
    foreach ($kata as $item) {
        $hasil = $hasil.$baru[$item];
    }
    return $hasil."<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx

echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
</body>
</html>