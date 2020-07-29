<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

function palindrome_angka($angka) {
  // tulis kode di sini
    $hasil="";
        for($i=strlen($angka)-1;$i>=0;$i--){
            $hasil .= $angka[$i];
        }
    echo $hasil. "<br>";    
    return $hasil;
}


// TEST CASES
echo palindrome_angka("81"); // 9
echo "hallo aku";
//palindrome_angka(10); // 11
//palindrome_angka(117); // 121
//palindrome_angka(175); // 181
//palindrome_angka(1000); // 1001

?>
</body>
</html>