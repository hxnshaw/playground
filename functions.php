<?php

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

/**function oldEnoughToClub($age)
{
    if ($age >= 18) {
        echo 'You are old enough to club';
    } else if ($age <= 17) {
        echo 'You are not old enough to club';
    }
}
 */
