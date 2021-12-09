<?php 

include('UseCaseHandlerChild.php');
include('child.php');

$form = "<form method='POST' action=''> " .
        "ID: <input type='text' name='id'> </br>" .
        "<input type='submit' value='REGISTER'>";

echo $form;

if(isset($_POST['id'])) {
  
    UseCaseHandlerChild::delete($_POST['id']);
}