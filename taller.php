<?php
    
    $planetas=array(

        "mercurio"=>1,
        "venus"=>2,
        "tierra"=>3,
        "marte"=>4,
        "jupiter"=>5,
        "saturno"=>6,
        "urano"=>7,
        "neptuno"=>8,       
        
    );

    $searchPlanet=array_search($_POST["numPlaneta"],$planetas);
    //echo "{$searchPlanet}";

    $filledArray = array_fill(0, $_POST["numPlanetaSolar"], 'Deshabitado');
    //print_r($filledArray);

    $planetasHab=array(

        "mercurio"=>false,
        "venus"=>false,
        "tierra"=>true,
        "marte"=>true,
        "jupiter"=>false,
        "saturno"=>false,
        "urano"=>false,
        "neptuno"=>false,       
        
    );    
    $planetHab = array_filter($planetasHab, function($planetasHab) {
        return $planetasHab  == true;
    });
    //print_r($planetHab);

    $gravedadPlanetas=array(

        "mercurio"=>3.7,
        "venus"=>8.87,
        "tierra"=>9.8,
        "marte"=>3.71,
        "jupiter"=>24.79,
        "saturno"=>10.44,
        "urano"=>8.87,
        "neptuno"=>11.15,       
        
    );
    function percentGravedad($value)
    {
        $calculo=$value/9.8;
        return $calculo;
    }
    $valor=percentGravedad($gravedadPlanetas[$_POST["gravedadPlanet"]]);

    $masaNaves=array(
        "nave1"=>30,
        "nave2"=>20,
        "nave3"=>60,
        "nave4"=>70,
        "nave5"=>35,
    );
    $sumaMasa=array_sum($masaNaves);
    //print_r($suma);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TallerPHP</title>
</head>
<body>

    <form action="taller.php" method="post">
        <h3>PUNTO1</h3>
        <label >Número de planetas</label>
        <select name="numPlaneta" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>        
        <input type="submit" value="Send">
        <br>
        <span id="valor"><?php echo $searchPlanet; ?></span>
        
    </form>
    
    <br>
    <h3>PUNTO 2</h3>
    <form action="taller.php" method="post">
        <label >Número de planetas para el sistema solar</label>
        <select name="numPlanetaSolar" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>        
        <input type="submit" value="Send">
        <br>
        <span id=""><?php print_r($filledArray); ?></span>        
    </form>
    <h3>PUNTO 3</h3>
        <label >Estado para habitar:</label> 
        <br>
        <span id=""><?php print_r($planetasHab); ?></span>  
        <br>   
        <label >Planetas Habitables:</label>        
        <br>
        <span id=""><?php print_r($planetHab); ?></span> 
        <br>


    <h3>PUNTO 4</h3>
    <form action="taller.php" method="post">
        <label >Gravedad de planetas</label>
        <select name="gravedadPlanet" id="">
            <option value="mercurio">mercurio</option>
            <option value="venus">venus</option>
            <option value="tierra">tierra</option>
            <option value="marte">marte</option>
            <option value="jupiter">jupiter</option>
            <option value="saturno">saturno</option>
            <option value="urano">urano</option>
            <option value="neptuno">neptuno</option>
        </select>  

        <input type="submit" value="Send">
        <br>
        <span id="">La gravedad del planeta es <?php print_r($valor); ?> veces el de la tierra ó <?php print_r($gravedadPlanetas[$_POST["gravedadPlanet"]]); ?>m/s^2  </span>        
    </form>

    <h3>PUNTO 5</h3>
    <form action="taller.php" method="post">
        <label >Masa de las naves Espaciales</label>       
        <span id=""><?php print_r($masaNaves); ?> </span> 
        <br>
        <label>Masa Total de las naves</label>
        <span id=""><?php print_r($sumaMasa); ?> </span> 
    </form> 
    
</body>
</html>


