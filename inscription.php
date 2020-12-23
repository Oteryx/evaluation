<header>
    <title>Inscription</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.google.com/specimen/Space+Mono">
</header>
<?php
if (isset($_POST["submit"])) {
    $hostname = 'localhost';
    $username = 'root';
    $password = '';

    $prenomnom = $_POST["prenomnom"];
    $mail = $_POST["mail"];
    $telephone = $_POST["telephone"];
    $groupe = $_POST["nbr_groupe"];
    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=evaluation", $username, $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
<body >

</body>
<footer>
</footer>