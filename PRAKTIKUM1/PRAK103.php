<!DOCTYPEHTML>
<html>
    <body>
        <?php
$celcius = 37.841;

$farenheit = ($celcius*9/5)+32;
$reamur = ($celcius*4)/5;
$kelvin = $celcius+273.15;

$farenheit4 = number_format($farenheit,4);
$reamur4 = number_format($reamur,4);
$kelvin4 = number_format($kelvin,4);

echo $farenheit4;
echo "</br>";
echo $reamur4;
echo "</br>";
echo $kelvin4;
        ?>
        </body>
</html>