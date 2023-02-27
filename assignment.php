<?php
class person {
    private $name;
    private $email;

    public function __construct( $name, $email ) {
        $this->name = $name;
        $this->email = $email;
    }

    public function setName($name) {
        return $this->name= $name;
    }
    public function setEmail($email) {
        return $this->email= $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

$name = $_POST['name'];
$email = $_POST['email'];

$person = new person( $name, $email );

echo "<h2>User Information:</h2>";
echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br><br>";
