<?php

include('UseCaseHandlerKing.php');
include('king.php');

$form = "<form method='POST' action=''> Nombre: <input type='text' name='name'> </br> " . 
        "<input type='submit' value='REGISTER'>";

echo $form;

if(isset($_POST['name'])) {
   
    $king = new King($_POST['name']);
    UseCaseHandlerKing::create($king);
}