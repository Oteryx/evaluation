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

    $nomsalle = $_POST["nomsalle"];
    $ruesalle = $_POST["rue"];
    $villesalle = $_POST["ville"];

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=evaluation", $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
        $sql = "INSERT INTO lieux VALUES (NULL, '".$nomsalle."','".$ruesalle."','".$villesalle."')";
        if ($dbh->query($sql)) {
            echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
        } else {
            echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
        }
        $dbh = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
<body style="background-color: #4d004d; !important;">
<div class="fond">
    <div class="titregestionsalles">
        Gestion des salles
    </div>
    <div class="formsalles">
        <form action="" method="post">
            <div>
                <input  name="nomsalle" class="ident" placeholder="Nom de la salle">
            </div>
            <div>
                <input  name="rue" class="ident" placeholder="Rue de la salle">
            </div>
            <div>
                <input  name="ville" class="ident" placeholder="Ville">
            </div>
            <div>
                <input type="submit" name="submit" class="boutonsalles">Allez go, en avant !</input>
            </div>
        </form>
    </div>
</div>
</body>
<footer>

</footer>