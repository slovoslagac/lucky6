<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 16.10.2017
 * Time: 12:37
 */

$listoftmpnum = array();
$listofnum = array();



$i=0;
$numcomp = 35;
$sonystart = 30;
$emptyarray = array();

$item_won = array(1,2,3,4,5,6,7,8,9,10);

$listofnames = array(31=>"S1", 32=>"S2", 33=>"S3", 34=>"S4", 35=>"S5");

while($i<5 ) {
    $tmpnum = mt_rand(1,$numcomp);
    if(in_array($tmpnum, $listoftmpnum)) {

    } else {
        array_push($listoftmpnum, $tmpnum);
        $i++;
    }
}

foreach ($listoftmpnum as $item) {
    if($item > $sonystart) {
        (in_array($item, $item_won))?  $class = 1 : $class = 2;
        array_push($listofnum, array($listofnames[$item],$class));

    } else {
         (in_array($item, $item_won))?  $class = 1 : $class = 2;
        array_push($listofnum, array($item,$class));

    }
}

echo json_encode($listofnum);
//echo json_encode($emptyarray);


