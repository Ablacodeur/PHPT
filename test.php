<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$fullname = 'Mathieu Nebra';
echo $fullname;
?>

<?php

// Premier utilisateur
$userName1 = 'Mickaël Andrieu';
$userEmail1 = 'mickael.andrieu@exemple.com';
$userPassword1 = 'S3cr3t';
$userAge1 = 34;

// Deuxième utilisatrice
$userName2 = 'Laurène Castor';
$userEmail2 = 'laurene.castor@exemple.com';
$userPassword2 = 'P4ssW0rD';
$userAge2 = 28;

// ... et ainsi de suite pour les autres utilisateurs.?>

<?php

$user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];

echo $user1[0]; // "Mickaël Andrieu"
echo $user1[1]; // "email"
echo $user1[3]; // 34 ?>
</body>
</html>