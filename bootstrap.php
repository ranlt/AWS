<?php

Autoloader::add_core_namespace('AWS');

Autoloader::add_classes(array(
	'AWS\\AWS'							=> __DIR__.'/classes/AWS.php',


	/* Models */
	'AWS\\Model_ELB' => __DIR__.'/classes/model/elb.php',
));