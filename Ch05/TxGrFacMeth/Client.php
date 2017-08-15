<?php
//Client.php
include_once('GraphicFactory.php');
include_once('TextFactory.php');
class Client
{
	private $someGraphicObject;
	private $someTextObject;
	
	public function __construct()
	{		
		$this->someGraphicObject=new GraphicFactory();
		echo $this->someGraphicObject->doFactory();
		$this->someTextObject=new TextFactory();
		echo $this->someTextObject->doFactory() . "<br/>";	
	}
}

$worker=new Client();
?>