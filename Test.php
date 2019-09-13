<?php

    $numbers = array(
        "First Iteration" => 1,
        "Second Iteration" => 2,
        "Third Iteration" => 3,
    );

    foreach ($numbers as $iteration => $number) {
        echo $iteration . ' is equal to ' . $number . '<br />';
    }

    $var = 1;

    foreach ($numbers as $revIteration => $var) {
        echo $revIteration . ' is described by wrong number ' . $var . '<br />';
    }

?>
