<?php

include "child.php";
include "UseCaseHandlerChild.php";

$form = "<form method='POST' action='GeneralForm.php'>" . 
        "<input type='hidden' name='selection' value='kings'>" .
        "<input type='submit' value='KINGS'>" .
        "</form> " .
        
        "<form method='POST' action='GeneralForm.php'>" .
        "<input type='hidden' name='selection' value='gifts'>" .
        "<input type='submit' value='GIFTS'>" .
        "</form>" .
        
        "<form method='POST' action='GeneralForm.php'>" .
        "<input type='hidden' name='selection' value='children'>" .
        "<input type='submit' value='CHILDREN'>" .
        "</form> ";

echo $form;
