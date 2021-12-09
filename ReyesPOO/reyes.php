<?php

include_once("UseCaseHandlerChild.php");
include_once("UseCaseHandlerGift.php");
include_once("UseCaseHandlerKing.php");
include_once("child.php");
include_once("gift.php");
include_once("king.php");


var_dump(UseCaseHandlerKing::getGiftDeliveryInfo(6));

foreach(UseCaseHandlerKing::getGiftDeliveryInfo(6) as $value ) {
    echo $value['gift'];
}



