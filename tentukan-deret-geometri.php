<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function tentukan_deret_geometri($arr) {
// kode di sini
$woi ;

 $beda = $arr[1] % $arr[0];
   for($i=0; $i<=count($arr)-2; $i++){
       $cari=0;
       $cari=$arr[$i + 1]%$arr[$i];
       
        if ( $cari != $beda){
            
            
             $woi = "false";
            break;
        }
        else{
            
            $woi = "true";
        }
             
    }
    return $woi."<br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>
</body>
</html>