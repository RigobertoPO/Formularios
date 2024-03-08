<?php
    $v1=$_GET['numero1'];
    $v2=$_GET['numero2'];
    $operador=$_GET['operador'];
    if($operador==1){
        $resultado=$v1+$v2;
    }
    else{
        if($operador==2){
            $resultado=$v1-$v2;
        }
        else{
            if($operador==3){
                $resultado=$v1/$v2;
            }
            else{
                $resultado=$v1*$v2;
            }
        }
    }
    
    //echo 'La suma es '.$suma;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: blue;">
    <h1>Resultado</h1>
    <?php
    echo '<h3 style="color:white;">'. $resultado.'</h3>';
    ?>
</body>
</html>