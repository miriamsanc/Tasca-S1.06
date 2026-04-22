<?php
/*Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct)*/

class UserName {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function __toString(){
        return "Name: {$this->name}" . "<br>" . "Age: {$this->age}";
    }

}

//Test
$user1 = new UserName("Ana", 29);
echo $user1;

?>