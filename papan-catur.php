<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function papan_catur($angka) {
// tulis kode di sini
    for($i=1;$i<=$angka;$i++){
        if($i%2==0){
            for($y=1;$y<=$angka-1;$y++){
                if($y==1){
                    echo " # ";
                }
                else{
                    echo  "# ";
                }
            }
        }
        else{
            for($y=1;$y<=$angka;$y++){
                echo  "# ";
            }
        }
        echo "<br>";
        
    }
    echo "<br>";
}

// TEST CASES
echo papan_catur(4);

/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);

/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>
</body>
</html>