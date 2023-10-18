<?php

    $age = 16;
    const REQUIRED_AGE = 18;

    if($age >= REQUIRED_AGE) {
        echo "This person can vote";
    } else {
        echo "This person can't vote";
    }

?>