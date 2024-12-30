<?php
class User{
    // private $id;
    private $nom;
    private $email;
    private $password;
    
public function  __construct($nom,$email,$password){
    // $this->id=$id;
    $this->nom=$nom;
    $this->email=$email;
    $this->password=$password;
}

public function getNom(){
    return $this->nom;
}

public function getEmail(){
    return $this->email;
}

public function getPassword(){
    return $this->password;
}

public function setNom($nom){
     $this->nom=$nom;
}

public function setEmail($email){
     $this->email=$email;
}

public function setPassword($password){
     $this->password=$password;
}





}