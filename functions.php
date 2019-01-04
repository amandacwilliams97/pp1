<?php
/**
 * Created by PhpStorm.
 * User: mandy
 * Date: 1/4/2019
 * Time: 10:36 AM
 */
function printArray($arrayItems){
    $itemsString = implode($arrayItems, ', ');
    echo "$itemsString";
}

function largest($arrayItems) {
    $initialLargest = $arrayItems[0];
    foreach ($arrayItems as $item) {
        if($item > $initialLargest) $initialLargest=$item;
    }
    return $initialLargest;
}

function average($arrayItems) {
    $total =0;
    foreach ($arrayItems as $item) {
        $total += $item;
    }
    return $total/count($arrayItems);
}

function removeDups($arrayItems) {
    return array_unique($arrayItems);
}