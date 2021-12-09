<?php

include('UseCaseHandlerKing.php');
include('king.php');

$form = "<form method='POST' action=''>  " .
        "ID: <input type='text' name='id'> </br> " .
        "Nombre: <input type='text' name='name'> </br> " .
        "<input type='submit' value='REGISTER'>";

echo $form;

if(isset($_POST['id']) && isset($_POST['name'])) {
   
    $king = new King($_POST['name']);
    UseCaseHandlerKing::update($_POST['id'], $king);
}