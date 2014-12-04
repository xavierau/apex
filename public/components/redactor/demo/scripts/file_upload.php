<?php

require_once 'config.php';

// This is a simplified example, which doesn't cover security of uploaded files. 
// This example just demonstrate the logic behind the process.

copy($_FILES['file']['tmp_name'], $file_path.$_FILES['file']['name']);
					
$array = array(
	'filelink' => $file_path.$_FILES['file']['name'],
	'filename' => $_FILES['file']['name']
);

echo stripslashes(json_encode($array));
	
?>