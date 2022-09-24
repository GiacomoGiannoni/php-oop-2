<?php

require_once __DIR__ . '/class/User/User.php';
require_once __DIR__ . '/class/User/Agente.php';
require_once __DIR__ . '/class/property/ImmovableToRent.php';
require_once __DIR__ . '/class/property/ImmovableToSale.php';


$carlo = new User ('carlo', 'bianchi', 'carlo@gmail.com');
$carlo->setCategory('cliente');
$carlo->setAccess();
$carlo->getAddress('Viale Borri', '112', 'Bergamo');
var_dump($carlo);

$mario = new Agente ('mario', 'rossi', 'mario@gmail.com');
$mario->setCategory('agente');
$mario->setAccess();
$mario->getAddress('Via Rossini', '244', 'Roma');
var_dump($mario);


$casaInVendita = new Sale ('b', 'Villetta a schiera');
$casaInVendita->setMQ(300);
$casaInVendita->setSale();
$casaInVendita->getAddress('viale Boccaccio', '12', 'Milano');
var_dump($casaInVendita);

$casaInAffitto = new Rent ('a+', 'Appartamento');
$casaInAffitto->setMQ(200);
$casaInAffitto->setRent();
$casaInAffitto->getAddress('Piazza Fontana', 'Brescia');
var_dump($casaInAffitto);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhP oop 2</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        



    </body>
</html>