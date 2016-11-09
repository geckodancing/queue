<?php
class Queue 
	{
	// we define 3 attributes
	// they are public so that we can access them using $post->author directly
	public $id;
	public $type;
	public $name;
	public $service;
	public $timeQueued;

	public function __construct($id, $type, $title, $firstname, $lastname, $service, $timeQueued) 
	{
		$this->id         = $id;
		$this->type       = $type;
		$this->title      = $title;
		$this->firstname  = $firstname;
		$this->lastname   = $lastname;
		$this->service    = $service;
		$this->timeQueued = $timeQueued;
	}

	public static function all() 
	{
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM queue');

		foreach($req->fetchAll() as $queueEntry) 
		{
			$list[] = new Queue($queueEntry['id'], $queueEntry['type'], $queueEntry['title'], $queueEntry['firstname'], $queueEntry['lastname'], $queueEntry['service'], $queueEntry['timeQueued']);
		}

		return $list;
	}
	
	public static function add($type, $title, $firstname, $lastname, $service) 
	{
		$db = Db::getInstance();
		/*
		$req = $db->query("INSERT INTO queue (type, title, firstname, lastname, service)
							VALUES ('".$type."', '".$title."', '".$firstname."', '".$lastname."', '".$service."')");
*/
		$statement = $db->prepare("INSERT INTO queue (type, title, firstname, lastname, service)
									VALUES(:type, :title, :firstname, :lastname, :service)");
		$statement->execute(array(
									"type" => $type,
									"title" => $title,
									"firstname" => $firstname,
									"lastname" => $lastname,
									"service" => $service,
								));
		$message = "New record created successfully";
		return $message;
	}

}
?>