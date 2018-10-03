<?	
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
			
					$serialize = "";
					
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