<?php 
 function getdata(){
		$list = file_get_contents("listing.txt");
		$list = explode("***", $list);
		$list = array_diff($list, array(""));
		$list = array_combine(array_merge(array_slice(array_keys($list), 1), array(count($list))), array_values($list));
		
	return $list;
}



/*function get_result(){
 $user_records =  scandir('records');
 $user_records = array_flip($user_records);
 foreach ($user_records as $key => $value) {
 	$value = (int)file_get_contents('records/'.$value);
 }
 return $user_records;
}*/
