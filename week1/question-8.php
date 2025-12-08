<?php
    // Write a function to reverse an array without using the built-in reverse() method
    function resvers()
    {
        $numbers = [1, 2, 3, 4, 5, 6, 7];
        $lenght = count($numbers);
        for ($i= $lenght-1; $i >=0 ; $i--) { 
            $reversed = $numbers[$i];
            echo $reversed . "<br>";
        }
    }

    resvers();
?>
