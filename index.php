<?php

    $number = 0;

    if (is_int($number)) {
        if($number == 0) {
            echo "Number is zero";
        } elseif($number > 0) {
            echo "Number is more than zero";
        } else {
            echo "Number is less than zero";
        }
    } else {
        echo "Number is not int";
    }

?>