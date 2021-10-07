<?php
$host = 'localhost';
$dbname = 'artasela';
$username = 'user';
$password = '';

$con = "mysql:host=$host;dbname=$dbname"; 

$pdo = new PDO($con, $username, $password);  

$contacts = array();

$contactList = $pdo->query("SELECT id,firstname,lastname FROM contacts");

while ($all = $contactList->fetch()) {
    $contacts[] = $all;
}

foreach($contacts as $contact) {
    ?>
        <tr>
            <td class="text-dark"><?=$contact['firstname']?></td>
            <td><?= $contact['lastname']?></td>
            <td><a href="info.php?p=<?=$contact['id']?>"><img style="width:25px;height:25px"src="user.png"/></a></td>
        </tr>
    <?php
}

?>