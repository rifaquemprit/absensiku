<?php

class Template extends Access
{
	
	public function __construct($args=array())
	{
	
	}
	
	public function render()
	{
		echo $this->content();
		//$this->levelakses();
	}
	
	/* function untuk levelisasi di set true */
	
	protected function levelakses() 
	{
		if($this->accessContent == true)
			echo $this->content();
		else
			echo "Akses kehalaman ini di tolak";
	}
	
	protected function content()
	{
		if(isset($_GET['m']))
		{
			$file = APPPATH . DIRECTORY_SEPARATOR . MODULE .$_GET['m'];
			$content = $this->buffer_include($file);
		}
		return $content;
	}
	
	
	protected function buffer_include($file)
	{
		if(file_exists($file . EXT))
		{
			ob_start();
			require_once $file . EXT;
			$content = ob_get_contents();
			ob_end_clean();
		}
		
		elseif(file_exists($file . DIRECTORY_SEPARATOR . 'index' . EXT))
		{
			ob_start();
			require_once $file . DIRECTORY_SEPARATOR . 'index' . EXT;
			$content = ob_get_contents();
			ob_end_clean();
		}
		
		else
		{
			$content = "Object not found";
		}
		
		return $content;
	}
}