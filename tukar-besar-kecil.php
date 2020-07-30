<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function tukar_besar_kecil($string){
//kode di sini
$ubah = "";
for($i=0;$i<strlen($string);$i++){
    if (ctype_upper ($string[$i])){
        $ubah = $ubah.strtolower($string[$i]);
    }
    else if(ctype_lower($string[$i])){
        $ubah = $ubah.strtoupper($string[$i]);
    }
    else{
        $ubah = $ubah.$string[$i];
    }
}
return $ubah."<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
</body>
</html>