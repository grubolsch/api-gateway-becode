<?php
if(empty($_GET['goto'])) {
	die('Please add a ?goto= param with the url you want to visit!');
}

echo file_get_contents(base64decode($_GET['goto']));
