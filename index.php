<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XX</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">Jareth PEREZ</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Cálcular la densidad de la SATURNO</h2>
  <p>Descripción:</p>
  <p>El radio de la SATURNO es 58 232 km y su masa es 5683 kg. <br>
a) ¿Cuál es la densidad promedio de la Saturno?<br>
b) Si el radio de saturno se redujera a una tercera parte y su masa no cambiará, cuál serı́a su densidad?<br>
c) Si el radio de saturno y su masa se redujera a una
tercera parte, ¿su densidad serı́a la misma? ¿por qué?</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    Densidad = Masa/Volumen<br>
    Volumen=(4/3)pi*r*r*r
</section>
<section class="datos">
<h2>Datos:</h2>
   m= 5.683E26 Kg. <br>
   r= 58 232  Km.
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)La densidad de la SATURNO es:<br>
    densidad = 5.683E26 Kg/volumen (m) <br>
    volumen= (4/3)*pi*(5.683E26)*(65.683E26)*(5.683E26)</p>
</section>
<?php
     function calcula_densidad(){
        $PI=3.141592;
        $masa= 5.683E26;
        $radio= 58232e3;
        $volumen= (4/3)*$PI*$radio*$radio*$radio;
        $densidad= $masa/$volumen;
        return $densidad;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: densidad = ".calcula_densidad(). " kg/(metro cubico)</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
   </section>
</body>
</html>
