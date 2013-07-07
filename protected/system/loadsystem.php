<?php

require_once APPPATH . DIRECTORY_SEPARATOR . SYSTEM . 'config' .EXT; 

foreach($systemload as $system)
{
	require_once APPPATH . DIRECTORY_SEPARATOR . SYSTEM . $system . EXT;
	$config = APPPATH . DIRECTORY_SEPARATOR . CONFIG . $system . EXT;
	if(file_exists($config))
	{
		require_once $config;
		$$system = new $system($$system);
	}
	else $$system = new $system();
}