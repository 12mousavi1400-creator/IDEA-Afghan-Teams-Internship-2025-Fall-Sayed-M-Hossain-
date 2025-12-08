<?php

 // sum all element of array
    function sum()
    {
        $numbers = [12,2,4];
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
            
        }
        echo $sum . " <br>";
    }
    sum();

?>
