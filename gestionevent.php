<header>
    <title>Gestions event</title>
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

    $nomevent = $_POST["nomevent"];
    $prix = $_POST["prix"];
    $desevent = $_POST["desevent"];
    $lieu = $_POST["lieux"];
    $image = $_POST["image"];
    $nbrplace = $_POST["nbr_place"];
    $heuredebut = $_POST["heuredebut"];
    $heurefin = $_POST["heurefin"];

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=evaluation", $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
        $sql = "INSERT INTO event VALUES (NULL, '".$nomevent."','".$prix."','".$desevent."','".$lieu."','".$image."','".$nbrplace."','".$heuredebut."','".$heurefin."')";
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
        Gestion des évenements
    </div>
    <div class="formsalles">
        <form action="" method="post">
            <div>
                <input  name="nomevent" class="ident" placeholder="Nom de l'événement">
            </div>
            <select   class="menuevent" name="prix">
                <option selected> Gratuit
                <option> Payant
            </select>
            <div>
                <input  name="desevent" class="ident" placeholder="Description de l'événement">
            </div>
            <div>
                <input  name="lieux" class="ident" placeholder="Lieu">
            </div>
            <div>
                <input  name="image" class="ident" placeholder="Image">
            </div>
            <div>
                <input  name="nbr_place" class="ident" placeholder="Nombre de place">
            </div>
            <div>
                <input  name="heuredebut" class="ident" placeholder="Heure du début de l'évent">
            </div>
            <div>
                <input  name="heurefin" class="ident" placeholder="Heure de la fin de l'évent">
            </div>
            <div>
                <input type="submit" name="submit" class="boutonsalles">Valider</input>
            </div>
        </form>

    </div>
</div>
</body>
<footer>
</footer>