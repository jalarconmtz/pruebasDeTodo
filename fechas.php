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
        echo "<br>".strtotime("now");
        // arreglo con los dias feriados del 2019}
        $diasFestivos =[
            '2019' => [],
            '2020' => [],
        ];
        
        $unDiaMas = $fechaConTimestamp+86400;
        echo "<br>".$unDiaMas;
        echo "<br>".strftime("%d-%m-%Y",$unDiaMas);

    ?>
</body>

</html>