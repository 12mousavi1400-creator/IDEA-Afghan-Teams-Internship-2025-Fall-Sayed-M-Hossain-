<?php

 // Write a function to count the occurrences of a specific element in an array.
    function contains($item)
    {
        $cars = ['BMW', 'TOTYOTA', 'Corola', 'Aqua', 'Pride'];
        
        if (in_array($item, $cars)) {
            echo "Found: $item <br>";
        }else {
            echo "Not found <br>";
        }
    }
    contains('BMW');

?>
