<?php
/**
 * Created by PhpStorm.
 * User: mandy
 * Date: 1/4/2019
 * Time: 10:36 AM
 */
function printArray($arrayItems){
    $itemsString = implode($arrayItems, ', ');
    echo "<br>($itemsString)";
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
    $newArray = array_unique($arrayItems);
    return '('.implode($newArray, ', ').')';
}

function distribution($arrayItems) {
    $assocArray = array_count_values($arrayItems);
    ksort($assocArray, SORT_STRING);
    $arrayString="";
    reset($assocArray);
    $firstKey = key($assocArray);

    foreach ($assocArray as $item => $value) {
        if(!($firstKey==$item)) {
            $arrayString.= ", $item=>$value";
        }
        else {
            $arrayString.= "$item=>$value";
        }
    }

    return '['.$arrayString.']';
}