<?php

    // Implement a function to find the smallest number in an array.
    function findSmallest()
    {
        $numbers = [10, 2, 3, 4, 5, 6, 7];
        $small = $numbers[0];

        foreach ($numbers as $number) {
            if ($number < $small) {
                $small = $number;
            }
        }

        echo $small . "<br>";
    }

    findSmallest();

?>
