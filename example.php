<?php

require_once 'autoload.php';

use Tools;

$validator = new Tools\Validator();

if($validator->validateEmail('john.doe@gmail.com')) {
	echo 'Valid email address!!!';
} else {
	echo 'Invalid email address!!!';
}
