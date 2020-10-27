<?php

$idade = 15;

printvar($idade);


// nome | idade | telefone

$usuario = array('nome' => "Joaquim");
$usuario['idade'] = '32';
$usuario['telefone'] = '63955458555';


$usuarios = array($usuario);



$usuarios[] = array('nome' => "ana", 'idade' => 2, 'telefone' => '0631155544477');
printvar($usuario);

printvar($usuarios);

function printvar($var) {
    echo "Echo: ". $var."<br/>";
    echo "Vardump:";
    var_dump($var);
    echo "print_r:";
    print_r($var);
    echo "<hr/>";
}
