<?php

$user_data = null;

/* Database */
require_once "constants.php";
require_once "connect.php";

function query($query) {
	global $link;

	if (!$link) {
		return false;
	}

	return mysqli_query($link, $query);
}

/* User */

function setUser($user) {
	$hashed_id = $user['id'].'|'.hash('sha512', $user['id'].HASH_KEY);
	setcookie("uid", $hashed_id, time() + 86400 * 2, "/");
}

function unsetUser() {
	setcookie("uid", "", 0, "/");
}

function getUser() {
	global $user_data;

	if (isset($user_data)) {
		return $user_data;
	}

	if (!isset($_COOKIE['uid'])) {
		 return false;
	}

	$user_data = array();

	$segs = explode("|", $_COOKIE['uid']);
	
	if (count($segs) != 2) {
		return false;
	}

	$hashed_id = hash('sha512', $segs[0].HASH_KEY);

	if ($hashed_id !== $segs[1]) {
		return false;
	}

	$result = select("SELECT `nickname`, `email` FROM `user` WHERE `id`=$segs[0];");
	
	if (!$result) {
		return false;
	}

	$row = mysqli_fetch_assoc($result);

	$nickname = $row['nickname'];
	$email = $row['email'];

	$apps = array();

	$query = "SELECT `app_id` FROM `user_app` INNER JOIN `user` ON `user`.`id`=`user_app`.`user_id` AND `user`.`id`=$segs[0];";
	$result = select($query);
	
	if ($result) {
		while ($row = mysqli_fetch_assoc($result)) {
			$apps[] = $row['app_id'];
		}
	}

	$user_data['id'] = $segs[0];
	$user_data['nickname'] = $nickname;
	$user_data['email'] = $email;
	$user_data['apps'] = $apps;

	return $user_data;
}


/* MISC */

function formatQueryDate($year, $month, $day) {
	if (empty($year) or empty($month) or empty($day) or !checkdate($month, $day, $year)) {
		return 'NULL';
	}
	return "'$year-$month-$day'";
}

function inPath($check_path) {
	$root_offset = strlen($_SERVER['DOCUMENT_ROOT']);
	$file_path = substr($_SERVER['SCRIPT_FILENAME'], $root_offset + 1);
	
	$file_seq = preg_split("/(\\\\|\\/)/", $file_path);
	$file_seq_len = count($file_seq);

	$check_seq = preg_split("/(\\\\|\\/)/", $check_path);
	$check_seq_len = count($check_seq);

	if ($file_seq_len < $check_seq_len) {
		return false;
	}

	for ($i=0; $i < $check_seq_len; $i++) { 
		if ($check_seq[$i] != $file_seq[$i]) {
			return false;
		}
	}

	return true;
}

function isImage($url) {
	$params = array('http' => array('method' => 'HEAD'));
	$ctx = stream_context_create($params);
	$fp = @fopen($url, 'rb', false, $ctx);

	if (!$fp) 
		return false;  // Problem with url

	$meta = stream_get_meta_data($fp);
	if ($meta === false) {
		fclose($fp);
		return false;  // Problem reading data from url
	}

	$wrapper_data = $meta["wrapper_data"];
	if(is_array($wrapper_data)) {
		foreach(array_keys($wrapper_data) as $hh) {
			if (substr($wrapper_data[$hh], 0, 19) == "Content-Type: image") {// strlen("Content-Type: image") == 19 
				fclose($fp);
				return true;
			}
		}
	}

	fclose($fp);
	return false;
}


function feedback($message, $error = false) {
	header('Content-Type: application/json; charset=utf-8');
	return json_encode(array("message" => $message, "error" => $error));
}

function getIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { //check ip from share internet
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { //to check ip is pass from proxy
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
?>