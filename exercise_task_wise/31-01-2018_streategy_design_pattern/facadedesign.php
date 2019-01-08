<?php 
/**
* 
*/
class Database
{
	public function getData($id)
	{
		//something
	}
	
}


class Template 
{
	public function server()
	{
		# code...
	}

}

class Logger
{
	
	public function logmsg()
	{
		# code...
	}
}


class PageFacade
{
	
	private $id; 
	private $msg; 

	function __construct()
	{

		
	}

	public function createAndserve($id, $msg = "")
	{
		$db = new Database();
		$db->getData($id);

		$temp = new Template();
		$temp->server();

		$logger = new Logger();
		$logger->logmsg($msg);

		
	}
}

$page = new PageFacade();
$id = $_POST['id']; //or get id by another way
$page->createAndserve("5","Serving a page for id {$id}");
