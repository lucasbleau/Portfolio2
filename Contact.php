<?php
session_start();

$nom = "";
$prenom = "";
$email = "";
$ville = "";
$objet = "";
$check = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $erreurs = [];

    if (empty($_POST["nom"]))
    {
        $erreurs["nom"] = "Le nom est obligatoire !";
    } else {
        $nom = $_POST["nom"];
    }

    if (empty($_POST["prenom"]))
    {
        $erreurs["prenom"] = "Le prenom est obligatoire !";
    } else {
        $prenom = $_POST["prenom"];
    }

    if (empty($_POST["email"]))
    {
        $erreurs["email"] = "L'email est obligatoire !";
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $erreurs["email"] = "Le format de l'adresse mail est invalide (test@test.fr) !";
        } else {
            $email = $_POST["email"];
        }
    }

    if (empty($_POST["ville"]))
    {
        $erreurs["ville"] = "Le ville est obligatoire !";
    } else {
        $ville = $_POST["ville"];
    }

    if (empty($_POST["message"]))
    {
        $erreurs["message"] = "Le message est obligatoire !";
    } else {
        $message = $_POST["message"];
    }

    if (empty($erreurs))
    {
        $emailClient = $email;
        $email = "contact@lucas-bleau.fr";
        $content = "De: $prenom $nom \nEmail: $emailClient \nMessage: $message";
        $mailClient = "From: $email \r\n";
        mail($email, "Portfolio : " . $objet, $content, $mailClient) or die($erreurs["EnvoieMail"] = "Erreur lors de l'envoie du mail");

        // Si pas d'erreur
        if (empty($erreurs)) {
            $_SESSION['success_message'] = "Le message a été soumis avec succès !";
            header("Location: index.php");
            exit();
        }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PortFolio - Lucas BLEAU</title>
</head>
<body>

<!--CONTACT-->

<div class="d-flex flex-column justify-content-between full-vh">

    <!--NAVBAR-->

    <nav class="navbar navbar-expand-lg p-4 clr1 w-100 z-3">
        <div class="container-fluid">
            <a class="navbar-brand text-light">Lucas BLEAU</a>
            <button class="navbar-toggler m-3 border border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <p class="text-light p-0 m-0">Menu</p>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item mx-3 d-flex align-items-center justify-content-center rounded-2">
                        <a class="nav-link px-3 my-auto text-light text-center" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item mx-3 d-flex align-items-center justify-content-center rounded-2">
                        <a class="nav-link px-3 my-auto text-light text-center" href="presentation.html">Présentation</a>
                    </li>
                    <li class="nav-item mx-3 d-flex align-items-center justify-content-center rounded-2">
                        <a class="nav-link px-3 my-auto text-light text-center" href="projets.html">Projets</a>
                    </li>
                    <li class="nav-item mx-3 d-flex align-items-center justify-content-center rounded-2">
                        <a class="nav-link px-3 my-auto text-light text-center" href="veilleT.html">Veille Technologique</a>
                    </li>
                    <li class="nav-item mx-3 d-flex align-items-center justify-content-center rounded-2">
                        <a class="nav-link px-3 my-auto text-light text-center" href="passions.html">Passions</a>
                    </li>
                    <li class="nav-item mx-3 d-flex align-items-center justify-content-center bg-light rounded-2">
                        <a class="nav-link px-3 my-auto txt-clr1 text-center" href="Contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--FIN NAVBAR-->

    <div class="d-flex flex-column justify-content-between">

        <h3 class="text-center m-5">Formulaire de contact</h3>

        <div class="container w-50">
            <form class="row g-3 needs-validation" novalidate method="post">

                <div class=" col-12 col-md-6">

                    <?php
                        if (!empty($erreurs["prenom"]))
                        {
                            $prenom = "";
                        }
                    ?>

                    <label for="validationCustom01" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="validationCustom01" required name="prenom" value="<?= $prenom ?>"
                    <?php
                    if (!empty($erreurs["prenom"]))
                    {
                        ?>
                        placeholder="<?= $erreurs["prenom"]?>"
                        <?php
                    }
                    ?>
                    >



                </div>

                <div class="col-12 col-md-6">

                    <?php
                        if (!empty($erreurs["nom"]))
                        {
                            $nom = "";
                        }
                    ?>

                    <label for="validationCustom02" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="validationCustom02" required name="nom" value="<?= $nom ?>"
                    <?php
                    if (!empty($erreurs["nom"]))
                    {
                        ?>
                        placeholder="<?= $erreurs["nom"]?>"
                        <?php
                    }
                    ?>
                    >

                </div>

                <div class="col-md-6">

                    <?php
                        if (!empty($erreurs["email"]))
                        {
                            $email = "";
                        }
                    ?>

                    <label for="validationCustomUsername" class="form-label">Email</label>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="email" value="<?= $email ?>"
                    <?php
                    if (!empty($erreurs["email"]))
                    {
                        ?>
                        placeholder="<?= $erreurs["email"]?>"
                        <?php
                    }
                    ?>
                    >

                </div>

                <div class="col-md-6">

                    <?php
                        if (!empty($erreurs["ville"]))
                        {
                            $ville = "";
                        }
                    ?>

                    <label for="validationCustom03" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="validationCustom03" required name="ville" value="<?= $ville ?>"
                    <?php
                    if (!empty($erreurs["ville"]))
                    {
                        ?>
                        placeholder="<?= $erreurs["ville"]?>"
                        <?php
                    }
                    ?>
                    >

                </div>

                <div class="col-12">

                    <?php
                        if (!empty($erreurs["message"]))
                        {
                            $message = "";
                        }
                    ?>

                    <label for="validationCustom04" class="form-label">Message</label>
                    <textarea type="text" class="form-control" id="validationCustom04" rows="4" required name="message"
                    <?php
                    if (!empty($erreurs["message"]))
                    {
                        ?>
                        placeholder="<?= $erreurs["message"]?>"
                        <?php
                    }
                    ?>
                    ><?= $message ?></textarea>


                </div>

                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-primary m-5 px-5" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
    <!--FOOTER-->

    <div class="bottom-0 w-100 p-4 clr1">
        <div class="row">
            <div class="col-12 col-lg-4 p-0 text-center">
                <a href="mailto:bleaulucas7@gmail.com" class="text-decoration-none text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="m-2" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                    </svg>
                    bleaulucas7@gmail.com
                </a>
            </div>
            <div class="col-12 col-lg-4 p-0 text-center" >
                <a href="tel:0610360128" class="text-decoration-none text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="m-2" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                    06 10 36 01 28
                </a>
            </div>
            <div class="col-12 col-lg-4 p-0 text-center">
                <a href="https://github.com/lucasbleau" class="text-decoration-none text-light" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="m-2" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                    </svg>
                    lucasbleau
                </a>
            </div>
        </div>
    </div>

    <!--FIN FOOTER-->

</div>

<!--FIN PASSIONS-->

<!--SCRIPT-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<!--FIN SCRIPT-->

</body>
</html>