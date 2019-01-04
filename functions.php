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
    $test = array(6=>1, 7=>1, 8=>3, 9=>2);
    /*
     * foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
     */
    ksort($assocArray, SORT_STRING);
    $arrayString="";
    foreach ($assocArray as $item => $value) {
        $arrayString.= "$item=>$value, ";
    }

    return '['.$arrayString.']';
}