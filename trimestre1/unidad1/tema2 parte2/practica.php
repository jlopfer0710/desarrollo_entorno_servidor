<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       function divisionRusa($num,$div,$resto=0){

            if($num<$div){
                return $resto;
            }else{
                return divisionRusa($num-$div,$div,$resto+1);
            }
       }
       $num=420;
       $div=2;
       echo "El resulado de la division entre $num y $div es ".divisionRusa($num,$div);
    ?>
</body>
</html>