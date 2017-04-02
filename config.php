<?php
define("host" , "localhost");
define("username","root");
define("password","");
define("database","karuschool");

$db = new mysqli(host,username,password,database);
//$table_schema = 'ubs_production';

function base_url()
{
	return "http://".$_SERVER['HTTP_HOST']."/finalyear/";
}
function pr($data=array())
{
	$template = '<pre class="pr">%s</pre>';
        
	return printf($template, trim(print_r($data, true)));
}

function print_json($data=array())
{
	echo json_encode($data);
}

?>