<?php

include('UseCaseHandlerGift.php');
include('gift.php');

$form = "<form method='POST' action=''></br>" . 
        "Nombre: <input type='text' name='name'> </br> " . 
        "Precio: <input type='text' name='price'> </br>" .
        "<input type='submit' value='REGISTER'>";

echo $form;

if(isset($_POST['name']) && isset($_POST['price'])) {
    
    $gift = new Gift($_POST['name'], $_POST['price']);
    UseCaseHandlerGift::create($gift);
}