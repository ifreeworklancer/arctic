<?php

require_once('header.php');


$sections = ['intro' , 'services'];

foreach ($sections as $section) {
	include(__DIR__ . '/includes/template-parts/' . $section . '.php');
}

require_once('footer.php');