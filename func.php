<?php 
if( !empty( $_POST )) {
$downloads = "downloads/".$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],$downloads);}
////
function get_result($username, $score){
 $score = $score +5;
$username_score = array('$username' => $score );
$username_score = file_put_contents('username_score.txt', $username_score );
return $username_score;

}



}