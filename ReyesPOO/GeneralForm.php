<?php

include "child.php";
include "UseCaseHandlerChild.php";

$createRef = null;
$readRef = null;
$updateRef = null;
$deleteRef = null;

if(isset($_POST['selection'])) {
    switch($_POST['selection']) {
        case "kings":
            $createRef = "CreateKingForm.php";
            $readRef = "ReadKingForm.php";
            $updateRef = "UpdateKingForm.php";
            $deleteRef = "DeleteKingForm.php";
            break;
        case "gifts":
            $createRef = "CreateGiftForm.php";
            $readRef = "ReadGiftForm.php";
            $updateRef = "UpdateGiftForm.php";
            $deleteRef = "DeleteGiftForm.php";
            break;
        case "children":
            $createRef = "CreateChildForm.php";
            $readRef = "ReadChildForm.php";
            $updateRef = "UpdateChildForm.php";
            $deleteRef = "DeleteChildForm.php";
            break;

    }
}
$form = "<a href='$createRef'>CREATE</a> </br>" . 
        "<a href='$readRef'>READ</a> </br>" .
        "<a href='$updateRef'>UPDATE</a> </br>" .
        "<a href='$deleteRef'>DELETE</a> </br>";

echo $form;
