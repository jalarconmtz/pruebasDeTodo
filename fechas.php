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
        echo "<br><br>";
        $fecha1 = strtotime('2010-10-20'); 
$fecha2 = strtotime('2010-10-25'); 
for($fecha1;$fecha1<=$fecha2;$fecha1=strtotime('+1 day ' . date('Y-m-d',$fecha1))){ 
    if((strcmp(date('D',$fecha1),'Sun')!=0) || (strcmp(date('D',$fecha1),'Sat')!=0)){
        echo date('Y-m-d D',$fecha1) . '<br />'; 
    }
}

    ?>
</body>

</html>