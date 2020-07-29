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

function palindrome_angka($angkas) {
  // tulis kode di sini
    $ulang = true;
    while($ulang){
        $angkas;
        $angka = "$angkas";
        $hasil="";
            for($i=strlen($angka)-1;$i>=0;$i--){
                $hasil .= $angka[$i];
            }    
        if($hasil == $angka){
            $ulang= false;
            echo $hasil. "<br>";
        }
        else{
            $angkas++;
        }
    }

      
}


// TEST CASES
palindrome_angka(9); // 9
palindrome_angka(10); // 11
palindrome_angka(117); // 121
palindrome_angka(175); // 181
palindrome_angka(1000); // 1001

?>
</body>
</html>