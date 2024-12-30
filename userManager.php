<?php 
class userManager {
private $pdo;

public function __construct($host, $dbname, $username, $password) {
$this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
}

public function ajouterUser(User $user) {
$stmt = $this->pdo->prepare("INSERT INTO users (name, email, password) VALUES (:nom, :email, :password)");
$stmt->execute([
'nom' => $user->getNom(),
'email' => $user->getEmail(),
'password' => $user->getPassword()
]);
}
}