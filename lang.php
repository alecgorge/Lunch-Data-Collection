<?php

$lang = array(
	'title' => 'Lunch Data Collection',
	'add-record'=>'Add Record'
);

function _e ($x) { global $lang; echo $lang[$x]; }
define("BASE", dirname($_SERVER['PHP_SELF']).'/');
function make_link ($x) {
	echo BASE.$x;
}

$db = new PDO('sqlite:db.sqlite');
/*
0 = food
1 = location
*/
function get_food() {
	global $db;
	$rows = $db->query("SELECT * FROM tags WHERE category = 0");
	$r = array();
	foreach($rows->fetchAll(PDO::FETCH_ASSOC) as $row) {
		$r[] = $row['tag'];
	}
	return $r;
}