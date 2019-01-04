<?php
/**
 * Created by PhpStorm.
 * User: mandy
 * Date: 1/4/2019
 * Time: 10:36 AM
 */
function printArray($arrayItems){
    $arrayItems = implode($arrayItems, ', ');
    echo "$arrayItems";
}

function largest($arrayItems) {
    $initialLargest = $arrayItems[0];
    foreach ($arrayItems as $item) {
        if($item > $initialLargest) $initialLargest=$item;
    }
    return $initialLargest;
}