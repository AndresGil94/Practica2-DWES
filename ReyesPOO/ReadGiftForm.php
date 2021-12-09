<?php

include('UseCaseHandlerGift.php');
include('gift.php');


foreach(UseCaseHandlerGift::readAll() as $value) {
    echo $value->getName();
    echo $value->getPrice();
    echo "</br>";
}
