<?php
class QueueController 
{
	public function queue()
	{
		if(isset($_POST['customerType']))
		{
			$type = $_POST['customerType'];
			$title = $_POST['title']; 
			$firstname = $_POST['firstname']; 
			$lastname = $_POST['lastname']; 
			$service = $_POST['service'];
			$message = Queue::add($type, $title, $firstname, $lastname, $service);
		}
		$queueEntries = Queue::all();

		require_once('views/queue.php');
	}

	public function error() 
	{
		require_once('views/error.php');
	}
}
?>