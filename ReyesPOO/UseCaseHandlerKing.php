<?php
include_once "iUseCaseHandler.php";
include_once "UseCaseHandlerChild.php";
include_once "UseCaseHandlerGift.php";
include_once "databaseConnection.php";

class UseCaseHandlerKing implements iUseCaseHandler
{

    public static function create($value) {
        
        $connect = DatabaseConnnection::connect();
        $query = "INSERT INTO rey (nombre) VALUES ('" . $value->getName() . "')";
        mysqli_query($connect, $query);

    }

    public static function readBy($value){
       
        $connect = DatabaseConnnection::connect();
        $query = "SELECT * FROM rey WHERE id = $value";
        $result = mysqli_query($connect, $query);
        $child = null;
        
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $child = new King($row['nombre']);
        }
        
        return $child;
        
    }

    public static function update($int, $value) {
        
        if(self::readBy($int) != null) {
            $connect = DatabaseConnnection::connect();
            $query = "UPDATE rey SET nombre = '" . $value->getName() . "' WHERE id='$int'";
            mysqli_query($connect, $query);
        }
        
    }

    public static function delete($int) {
        
        if(self::readBy($int) != null) {
            $connect = DatabaseConnnection::connect();
            $query = "DELETE FROM rey WHERE id = '$int'";
            mysqli_query($connect, $query);
        }
    }
    
    public static function readAll() {
        
        $array = array();
        
        $connect = DatabaseConnnection::connect();
        $query = "SELECT * FROM rey ORDER BY nombre ASC";
        $result = mysqli_query($connect, $query);
        
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $king = new King($row['nombre']);
            $king->setId($row['id']);
            $array[] = $king;
        }
        
        return $array;
        
        
    }
    
    public static function getGiftDeliveryInfo($int) {
        
        $array = array();
    
        $connect = DatabaseConnnection::connect();
        $query = "SELECT * FROM ninos_regalos_rey WHERE rey_id = '$int'";
        $result = mysqli_query($connect, $query);
    
        $king = UseCaseHandlerKing::readBy($int);
      
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
            $gift = $row['regalos_id'];
            $child = $row['ninos_id'];
      
            $giftResult = UseCaseHandlerGift::readBy($gift);
            $childResult = UseCaseHandlerChild::readBy($child);
            $array[] = $king->getName();
            $array[]['child'] = $childResult->getName();
            $array[][]['gift'] = $giftResult;
            
        }
        
        return $array;
        
    }
}