<?php 
$host = 'localhost';
$dbname = 'artasela';
$username = 'user';
$password = '';

$con = "mysql:host=$host;dbname=$dbname"; 

$pdo = new PDO($con, $username, $password);  

$wid = $_GET['p'];

$sql = "SELECT * FROM contacts WHERE id = $wid";

$stmt = $pdo->query($sql);
$user = $stmt->fetch();
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php require('nav.php');?>
<table class="table table-striped">
    <tr>
        <td>Civilité</td>
        <td><?= $user['civility'] ?></td>
    </tr>
    <tr>
        <td>Prénom</td>
        <td><?=$user['firstname']?></td>
    </tr>
    <tr>
        <td>Nom</td>
        <td><?=$user['lastname']?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?=$user['email']?></td>
    </tr>
    <tr>
        <td>Adresse</td>
        <td><?=$user['address']?></td>
    </tr>
    <tr>
        <td>Code postal</td>
        <td><?=$user['zip']?></td>
    </tr>
    <tr>
        <td>Ville</td>
        <td><?=$user['city']?></td>
    </tr>
    <tr>
        <td>Pays</td>
        <td><?=$user['country']?></td>
    </tr>
    <tr>
        <td>Profession</td>
        <td><?=$user['job']?></td>
    </tr>
    <tr>
        <td>Message</td>
        <td><?=$user['message']?></td>
    </tr>
</table>