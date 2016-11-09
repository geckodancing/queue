<?php
class QueueController 
{
	public function queue()
	{
		if(isset($_POST['customerType']))
		{
			$type = $_POST['customerType'];
			$firstname = $_POST['firstname'];
			$service = $_POST['service'];
			switch ($type) 
			{
				case 'citizen':
					$title = $_POST['title']; 			
					$lastname = $_POST['lastname'];
				break;
				case 'organisation':
					$firstname = $_POST['name'];
					$title = "";
					$lastname = "";
				break;
				default:
					$firstname = "";
					$title = "";
					$lastname = "";
			}

			Queue::add($type, $title, $firstname, $lastname, $service);
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