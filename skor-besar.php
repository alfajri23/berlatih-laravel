<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function skor_terbesar($arr){
//kode di sini
$temp;
for($i=0;$i<count($arr);$i++){
    for($y=0;$y<count($arr[$i]);$y++){
        if($arr[$y]["kelas"] === $arr[$y+1]["kelas"] ){
            if($arr[$y]["nilai"]<$arr[$y+1]["nilai"]){
                $temp = $arr[$y];
                $arr[$y] = $arr[$y+1];
                $arr[$y+1] = $temp;
            }
        }
        
        if($arr[$y]["nilai"]<$arr[$y+1]["nilai"]){
            $temp = $arr[$y];
            $arr[$y] = $arr[$y+1];
            $arr[$y+1] = $temp;
        }
        
    }
}
for($i=0;$i<3;$i++){
echo "<pre>";
print_r($arr[$i]);
echo "</pre>";
}



}





// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

skor_terbesar($skor);



//print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>
</body>
</html>