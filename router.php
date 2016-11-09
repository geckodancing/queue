<?php
function call($controller, $action) 
{
	// require the file that matches the controller name
	require_once('controllers/' . $controller . '_controller.php');

	// create a new instance of the needed controller
	switch($controller) 
	{
		case 'queue':
				require_once('models/queue.php');
				$controller = new QueueController();
			break;
	}
	// call the action
	$controller->{ $action }();
}

// pages allowed
$controllers = array(
					'queue' => ['queue', 'error']
					);

if (array_key_exists($controller, $controllers)) 
	{
	if (in_array($action, $controllers[$controller])) 
	{
		call($controller, $action);
	} 
	else 
	{
		call('pages', 'error');
	}
} 
else 
{
	call('pages', 'error');
}
?>