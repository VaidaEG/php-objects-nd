<h1 style="text-align: center;">1. UŽDUOTIS</h1>
<?php
define ('DIR', __DIR__.'/');

require DIR.'nd1/Pinigine.php';
$pinigine = new Pinigine;
$pinigine -> ideti(50);
$pinigine -> ideti(1);
$pinigine -> ideti(30);
$pinigine -> ideti(1);
$pinigine -> skaiciuoti();
echo '<br> popieriniai ';
$pinigine -> getPopieriniai();
echo '<br> metaliniai ';
$pinigine -> getGeleziniai();
echo '<pre>';
var_dump($pinigine);
echo '</pre>';
echo '<hr>';
?>
<h1 style="text-align: center;">2. UŽDUOTIS</h1>
<?php
require DIR.'nd2/Stikline.php';
$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);
$stikline1 -> ipilti(200);
$stikline2 -> ipilti($stikline1 -> ispilti());
$stikline3 -> ipilti($stikline2 -> ispilti());
echo '<pre>';
print_r($stikline1);
print_r($stikline2);
print_r($stikline3);
echo '</pre>';
echo '<hr>';
?>
<h1 style="text-align: center;">3. UŽDUOTIS</h1>
<?php
require DIR.'nd3/Grybas.php';
require DIR.'nd3/Krepsys.php';
$krepsys = new Krepsys();

while ($krepsys -> svoris <= 500) 
{
    $grybas = new Grybas();
    if ($grybas -> getValgomas() == true && $grybas -> getSukirmijes() == false ) {
        $krepsys -> prideti($grybas -> getGryboSvoris());
    }
    $krepsys -> visiGrybai++;
}
echo '<pre>';
var_dump($grybas);
echo '<br>';
var_dump($krepsys);
echo '</pre>';
echo '<hr>';
?>
<h1 style="text-align: center;">4. UŽDUOTIS</h1>
<p>Patobulinti 1 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje
yra monetų ir kiek banknotų. Parašyti metodą monetos, kuris skaičiuotų kiek
yra piniginėje monetų ir metoda banknotai - popierinių pinigų skaičiavimui.</p>