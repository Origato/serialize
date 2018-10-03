<?php
require_once __DIR__ . "/../vendor/autoload.php";
use \Symfony\Component\Yaml\Yaml;

class Serializer
{
	public function serialize($array, $type)
	{
		switch($type)
		{
			case "json":
			
					$serialize = json_encode($array);
					
				break;
			case "yaml":

					$serialize = Yaml::dump($array);
					
				break;
			case "xml":
			
					$serialize = "";
					
				break;
			default:
				$serialize = null;
		}

		return $serialize;
	}
}
?>