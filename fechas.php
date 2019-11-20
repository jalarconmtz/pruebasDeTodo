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

        $diasSaltar = [1,6];
        
        $unDiaMas = $fechaConTimestamp+86400;
        echo "<br>".$unDiaMas;
        echo "Convertimos el timestap a formato de fecha: <br>";
        $fechaUnDiaMas =  strftime("%d-%m-%Y",$unDiaMas);
        echo $fechaUnDiaMas."<br>";
        $fecha =  date("l", $unDiaMas);
        echo $fecha."<br>";
        if($fecha == 'Sunday'){
            echo "Es domingo y no debe de guardarse, deberá de ser un día mas..<br>";
            $unDiaMas+=86400;
            echo $unDiaMas."<br>";
            $fechaNoDomingo = strftime("%d-%m-%Y",$unDiaMas);
            echo $fechaNoDomingo."<br>";
        } else {
            echo "No es domingo, asi que se queda el día calculado....<br>";
        }
        

    ?>
</body>

</html>