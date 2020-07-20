<?php 

    class Person {
        private $name;
        private $email;
        public static $ageLimit = 70;
    
        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__." created<br>";
        }

        public function __destruct() {
            echo __CLASS__." destroyed<br>";
        }

        public function getName() {
            return $this->name."<br>";
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getEmail() {
            return $this->email."<br>";
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public static function getAgeLimit() {
            return self::$ageLimit."<br>";
        }
    }

    // Static variables and methods can be used without creating an object
    echo Person::$ageLimit."<br>";
    echo Person::getAgeLimit();

    $person1 = new Person("John Doe", "jdoe@gmail.com");
    echo $person1->getName();
    $person1->setEmail("johndoe@gmail.com");
    echo $person1->getEmail(); 

    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance) {
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo __CLASS__." created<br>";
        }

        public function getBalance() {
            return $this->balance."<br>";
        }

        public function setBalance($balance) {
            $this->balance = $balance;
        }
    }

    $customer1 = new Customer("Kevin Smith", "ksmith@gmail.com", 150);
    echo $customer1->getBalance();

?>