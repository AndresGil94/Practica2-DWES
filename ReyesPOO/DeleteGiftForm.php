<?php 

include('UseCaseHandlerGift.php');
include('gift.php');

$form = "<form method='POST' action=''> " .
        "ID: <input type='text' name='id'> </br>" .
        "<input type='submit' value='REGISTER'>";

echo $form;

if(isset($_POST['id'])) {
  
    UseCaseHandlerGift::delete($_POST['id']);
}