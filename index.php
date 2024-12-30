<?php
require_once 'user.php';
require_once 'userManager.php';

$manager = new userManager('localhost', 'mise_en_situation_php_poo', 'root', '');

if (isset($_POST['ajouter'])) {
    if(empty($_POST['nom']) || empty($_POST['email'])|| empty($_POST['password'])){
        echo "remplir tous les champs";
    }else{
        $user = new User($_POST['nom'], $_POST['email'], $_POST['password']);
        $manager->ajouterUser($user);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">

        <h2>Register</h2>

        <label for="name">Name</label>
        <input id="name" type="text" name="nom">

        <label for="email">Email</label>
        <input id="email" type="text" name="email">

        <label for="password">Password</label>
        <input id="password" type="text" name="password">

        <button type="submit" name="ajouter">Save</button>
    </form>

</body>

</html>