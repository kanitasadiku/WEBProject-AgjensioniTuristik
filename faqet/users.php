<?php

class Users {
    private $id;
    private $name;
    private $lastname;
    private $phone;
    private $email;
    private $password;

    public function __construct($id, $name, $lastname, $phone, $email, $password, $role) {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

   
}

?>
