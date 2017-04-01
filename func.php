<?php 
 function getdata($var){
$list = file_get_contents("listing.txt");
$list = explode("***", $list);
$list = array_diff($list, array(""));
$test = $list[$var];
$test = json_decode($test, true);
return $test;}


function get_result($username, $score){
 $score = $score +5;
$username_score = array('$username' => $score );
$username_score = file_put_contents('username_score.txt', $username_score );
return $username_score;}
