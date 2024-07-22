<html>
    <head>
    </head>
    <body>
        <?php 
        $Precio1=$_GET ['precio1'];
        $Precio2=$_GET ['precio2'];
        $Precio3=$_GET ['precio3'];


        $media= ($Precio1+$Precio2+$Precio3)/3;
        echo "<br> &nbsp; los datos son:";
        echo "<br> &nbsp; Precio número 1: ".$Precio1." Pesos";
        echo "<br> &nbsp; Precio número 2: ".$Precio2." Pesos";
        echo "<br> &nbsp; Precio número 3: ".$Precio3." Pesos";
        echo "<br> &nbsp; La media sería: ".$media;
        ?>
    </body>
</html>