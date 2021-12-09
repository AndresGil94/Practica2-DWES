<?php

include('UseCaseHandlerChild.php');
include('child.php');


foreach(UseCaseHandlerChild::readAll() as $value) {
    echo $value->getName();
    echo $value->getSurname();
    echo $value->getDate();
    echo $value->getIsGood();
    echo "</br>";
}
