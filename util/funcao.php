<?php

function convertDateToDb($data){
    if($data == "")
        return null;

    $newDate = explode("/", $data);
    $newDate = array_reverse($newDate);
    return implode("-", $newDate);
}

function convertDoubleToDb($value){
    $value = trim($value);
    $value = str_replace(",",".", $value);
    return $value;
}