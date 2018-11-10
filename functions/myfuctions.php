<?php
function loop($times)
{
    for ($i = 0; $i < $times; $i++) {
        echo $i . '. Helo world<br>';
    }
}

function sum($szam, $szam2, $szam3=0)
{
    $osszeg = $szam + $szam2 +$szam3;
    return $osszeg;
}

?>