<?php


    header("Content-type: application/json");
    
	$res = array('error' => false);

	$action = 'read';

	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}

	if ($action == 'read') {
		$result = $bdd->query("SELECT * FROM `dgb`");
		$users  = array();

		while ($row = $result->fetch_assoc()) {
			array_push($users, $row);
		}
		$res['users'] = $users;
	}

	$dbb->close();

	echo json_encode($res);
	die();