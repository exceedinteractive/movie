<?php
// Application paths
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
 
// Error reporting
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
?>