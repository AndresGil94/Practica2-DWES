<?php

include('UseCaseHandlerKing.php');
include('king.php');


foreach(UseCaseHandlerKing::readAll() as $value) {
    echo $value->getName();
    echo "</br>";
}
