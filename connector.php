<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=melvindiez249;charset=utf8', 'melvindiez249', 'password');
}

catch (Exception $e)

{
        die($e->getMessage());
}

?>