<?
class Person implements \JsonSerializable
{
    const MAX_POSSIBLE_AGE = 150;
    
    private $firstName;
    private $lastName;
    private $age;
	
    public function __construct($firstName, $lastName, $age = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->setAge($age);
    }
    
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
       
        $this->age = $age;
       
    }
	
    public function jsonSerialize()
    {
        return [
            'firstName1' => $this->firstName,
            'lastName2' => $this->lastName,
            'age3' => $this->age,
        ];
    }

}
?>