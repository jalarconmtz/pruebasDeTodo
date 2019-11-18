<html>
<head>
</head>

<body>
    <?php

        $ultimaFecha = '16-11-2019';
        echo $ultimaFecha ;
        echo "<br>";
        // cambiamos la fecha a timestap
        echo "Cambio de fecha:<br>";
        
        $fechaConTimestamp = strtotime($ultimaFecha);
        echo $fechaConTimestamp;
        echo strtotime("now");

    ?>
</body>

</html>