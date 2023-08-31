<?php
class Employer {
    public $name = 'Владимир';
    public $age = '32 года';

    function getInfo(){
        echo $this -> name;
        echo '<br>';
        echo $this -> age;
    }
}
$a = new Employer();
$a -> getInfo();