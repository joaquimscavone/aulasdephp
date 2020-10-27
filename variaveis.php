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
//    echo "Echo: ". $var."<br/>";
//    echo "Vardump:";
//    var_dump($var);
//    echo "print_r:";
//    print_r($var);
//    echo "<hr/>";
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variavéis</title>
    </head>
    <body>
        <h1>Numerico</h1>
        
        <span>$var = 5</span>
        
        <hr>
        <h1>String</h1>
        
        <span>$var = "5"</span>
    </body>
</html>
