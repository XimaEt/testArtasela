<?php
    $host = 'localhost';
    $dbname = 'artasela';
    $username = 'user';
    $password = '';

    $con = "mysql:host=$host;dbname=$dbname"; 
    
    $pdo = new PDO($con, $username, $password);  

    if (isset($_POST['civility'],$_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['address'],$_POST['zip'],$_POST['city'],$_POST['country'],$_POST['job'],$_POST['message']) 
        && !empty($_POST['civility']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['zip']) && !empty($_POST['city']) && !empty($_POST['country']) && !empty($_POST['job']) && !empty($_POST['message']))
    {
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
try {
    $civility = $_POST['civility'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $job = $_POST['job'];
    $message = $_POST['message'];
    
    $add = "INSERT INTO contacts(civility, firstname, lastname, email, address, zip, city, country, job, message) VALUES (\"$civility\", \"$firstname\", \"$lastname\", \"$email\", \"$address\", \"$zip\", \"$city\", \"$country\", \"$job\", \"$message\")";
    $pdo->exec($add);    
        echo "<script>alert(\"Votre requête est bien envoyée.\")</script>";
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        echo "<script>alert(\"Veuillez completer tous les champs\")</script>";
    }
    ?>