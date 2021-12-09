<?php

include('UseCaseHandlerGift.php');
include('gift.php');

$form = "<form method='POST' action=''>" .
        "ID: <input type='text' name='id'>  </br> " .
        "Nombre: <input type='text' name='name'> </br> " . 
        "Price: <input type='text' name='price'> </br>" .
        "<input type='submit' value='REGISTER'>";

echo $form;

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price'])) {
   
    $gift = new Gift($_POST['name'], $_POST['price']);
    UseCaseHandlerGift::update($_POST['id'], $gift);
}