<?php

/* basic stuff */
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
Tag stuff

0 = food
1 = location
2 = period
3 = people
*/
define("TAG_FOOD", 0);
define("TAG_LOCATION", 1);
define("TAG_PERIOD", 2);
define("TAG_PEOPLE", 3);
function get_tags($cat = TAG_FOOD) {
	global $db;
	$rows = $db->prepare("SELECT * FROM tags WHERE category = ?");
	$rows->execute(array((int)$cat));
	$r = array();
	foreach($rows->fetchAll(PDO::FETCH_ASSOC) as $row) {
		$r[] = array(
			"value" => $row['tag_id'],
			"name" => $row['tag']
		);
	}
	return $r;
}

function get_food() {
	return get_tags(tAG_FOOD);
}

function get_locations() {
	return get_tags(TAG_LOCATION);
}

function get_periods() {
	return get_tags(TAG_PERIOD);
}

function get_people() {
	return get_tags(TAG_PEOPLE);
}

/* post handles */
if($_POST['add']) {
	
}