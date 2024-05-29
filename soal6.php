<?php
$r = 1;
for ($i=9; $i >= 1; $i--) { 
    for ($j=$r; $j <= 9; $j++) { 
        if ($j % 2 == 0) {
            echo '<u>'.$j.'</u>'.' ';
        }
        else{
            echo $j.' ';
        }
    }
    $r++;
    echo '<br>';
}

?>