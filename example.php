<?php

require_once 'autoload.php';

use Tools;

$validator = new Tools\Validator();

if($validator->validateEmail('antonio.budiselic@gmail.com')) {
	echo 'Valid email address!!!';
} else {
	echo 'Invalid email address!!!';
}
