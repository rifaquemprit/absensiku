<?php

define("APPPATH",__DIR__);
define("EXT",".php");
define("PROTECTED_DIR",'protected');
define("SYSTEM", PROTECTED_DIR . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR);
define("CONFIG", PROTECTED_DIR . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR);
define("MODULE", PROTECTED_DIR . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR);
define("TEMPLATE", PROTECTED_DIR . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR);




/* 
 *
 *
 * Memasukan applikasi
 */

include APPPATH . DIRECTORY_SEPARATOR . PROTECTED_DIR . DIRECTORY_SEPARATOR . 'chaem' . EXT;