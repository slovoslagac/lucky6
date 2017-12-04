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
        array_push($listofnum, $listofnames[$item]);

    } else {
        array_push($listofnum, $item);

    }

}



