<?php 

include('UseCaseHandlerKing.php');
include('king.php');

$form = "<form method='POST' action=''> " .
        "ID: <input type='text' name='id'> </br>" .
        "<input type='submit' value='REGISTER'>";

echo $form;

if(isset($_POST['id'])) {
  
    UseCaseHandlerKing::delete($_POST['id']);
}