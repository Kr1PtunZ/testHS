<?php
$password = 'usgaswdL13';
echo  $password .'<br>';
echo password_hash($password, PASSWORD_BCRYPT); //хэшированный пароль