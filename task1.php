<?php
$i = 1;
while($i <= 100){
    switch ($i){
        case !is_float($i/3) && !is_float($i/5);
            echo 'FizzBuzz'.'<br>';
            break;

        case !is_float($i/3);
            echo 'Fizz'.'<br>';
            break;

        case !is_float($i/5);
            echo 'Buzz'.'<br>';
            break;
        case $i;
            echo $i .'<br>';
    }
    $i++;
}