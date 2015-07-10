<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Operación</title>
    </head>
    <body>
<?php
    function ciclos(){
    $ciclo = $_POST['ciclo'];
    switch($ciclo){
        case "1":
        $ciclo = 1;
        while($ciclo<=10){
            echo "<table border=1><tr align=center><td colspan=5>TABLA DEL ".$ciclo.":</td></tr><br/>";
            $ciclo1=1;
        while($ciclo1<=10){
            $mult=$ciclo*$ciclo1;
            echo "<tr align=center><td>".$ciclo." X ".$ciclo1." = </td><td>".$mult."</td></tr>";
            $ciclo1++;
        }
        echo "</table>";
        $ciclo++;
        }
        break;

        case "2":
            $ciclo2=1;
            do{
                echo "<table border=1><tr align=center><td colspan=5>TABLA DEL ".$ciclo2.":</td></tr><br/>";
                $ciclo3=1;
            do{
                $mult=$ciclo2*$ciclo3;
                echo "<tr align=center><td>".$ciclo2." X ".$ciclo3." = </td><td>".$mult."</td></tr>";
                $ciclo3++;
            }while($ciclo3<=10);
                echo "</table>";
                $ciclo2++;
            }while($ciclo2<=10);
        break;
        
        case "3":
        for($ciclo4=1;$ciclo4<=10;$ciclo4++){
            echo "<table border=1>";
            echo "<tr align=center><td colspan=5>TABLA DEL ".$ciclo4.":</td></tr><br/>";
        for($ciclo5=1;$ciclo5<=10;$ciclo5++){
            $mult=$ciclo4*$ciclo5;
            echo "<tr align=center><td>".$ciclo4." X ".$ciclo5." = </td><td>".$mult."</td></tr>";
        }
        echo "</table>";
    }
        break;
    }
}

if(isset($_POST['ciclo']))
    {
        ciclos();
    }
?>
</body>
</html>