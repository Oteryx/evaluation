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
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
        $sql = "INSERT INTO utilisateurs (prenomnom, mail, telephone, nbr_groupe)
VALUES ('$prenomnom','$mail' ,'$telephone','$groupe')";
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
    <div class="inscription">
        <div class="inscri1">
            Inscription à
        </div>
        <div class="titreinscri">
            La tête dans les étoiles
        </div>
    </div>
    <div class="cardinscri">
        <div class="card" style="width: 20rem;height:480px ">
            <img src="https://images-ext-2.discordapp.net/external/PrU0PJS7G4SCn2hPV3JfK98XyvPjBbwirb2mjqvc4qM/%3Fixlib%3Drb-1.2.1%26q%3D80%26fm%3Djpg%26crop%3Dentropy%26cs%3Dtinysrgb%26w%3D400%26fit%3Dmax%26ixid%3DeyJhcHBfaWQiOjE0NTg5fQ/https/images.unsplash.com/photo-1579489225078-27977a77bf72?width=286&height=430"
                 class="card-img-top"
                 alt="Accroche HTML" style="height: 169px">
            <div class="resume">12 janvier 2021 16h00<br>
                <div class="heure">6 heures de folie<br></div>
                <div class="place"> il reste 22 places</div>
            </div>
            <div class="card-body">
                <div class="prix">C'est gratuit !!!</div>
                <div class="description"><p class="card-text">Du texte sous le titre dans le corps de carte bla blabla
                        bla bla bla bla bla Du texte sous le titre dans le corps de carte bla blabla bla bla bla bla
                        bla </p></div>
                <div class="adresse">
                    Salle Poirel<br>
                    22 rue des soupirs<br>
                    88000 Epinal
                </div>
                <div class="asterisque">
                    Merci de vous présenter à l'entrée 3 <br> une demi-heure avant le début du <br>spectable.
                </div>
            </div>
        </div>
    </div>
    <div class="formulaire">
        <form action="/" method="post">
            <div>
                <input class="ident" id="prenomnom" name="prenomnom" placeholder="Nom et prénom">
            </div>
            <div>
                <input class="ident" id="mail" name="mail" placeholder="Email">
            </div>
            <div>
                <input class="ident" id="telephone" name="telephone" placeholder="Téléphone">
            </div>
            <div class="selection">
                <div class="textinscription">
                    Je viens
                </div>
                <select class="menu" id="nbr_groupe" name="nbr_groupe">
                    <option selected> Seul
                    <option> 1
                    <option> 2
                    <option> 3
                    <option> 4
                </select>
            </div>
            <div class="textinscription">
                Vous pourrez payer en ligne votre ou vos <br> inscriptions sur la page suivante
            </div>
            <div>
                <input type="submit" name="submit" class="boutonform">Allez go, en avant !</input>
            </div>
        </form>
    </div>
</div>
</body>
<footer>
</footer>