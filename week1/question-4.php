<?php
  // Write a function to find the largest element in an array.
    function findeLargest()
    {
        $numbers = [11,2,13,91,4,95,60,71,80];
        if (empty($numbers)) {
            return null;
        }
        $max = $numbers[0];
        foreach ($numbers as $number) {
            if ($number > $max) {
                $max = $number; 
            }
        }
        echo $max . "<br>";
    }
    findeLargest();

?>
