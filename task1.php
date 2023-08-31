<?php
$i = 1;
while($i <= 100){
    switch ($i){
        case !is_float($i/3) && !is_float($i/5);
            echo 'FizzBuzz: ';
            break;

        case !is_float($i/3);
            echo 'Fizz: ';
            break;

        case !is_float($i/5);
            echo 'Buzz: ';
            break;
    }
    echo $i .'<br>';
    $i++;
}