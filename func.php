<?php 
 function getdata(){
		$list = file_get_contents("listing.txt");
		$list = explode("***", $list);
		$list = array_diff($list, array(""));
		$list = array_combine(array_merge(array_slice(array_keys($list), 1), array(count($list))), array_values($list));
		
	return $list;
}
function getUsers()
{
    $filePath = __DIR__ . '/users_data.json';
    if (!file_exists($filePath)) {
        return [];
    }
    $fileData = file_get_contents($filePath);
    $data = json_decode($fileData, true);
    if (!$data) {
        return [];
    }
    return $data;
}
function getUser($login)
{
    $users = getUsers();
    foreach ($users as $user) {
        if (strcmp($user['login'], $login) === 0) {
            return $user;
        }
    }
    return null;
}



