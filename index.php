<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Construction du message e-mail
    $to = "lulubleau39@gmail.com"; // Adresse e-mail où vous souhaitez recevoir les messages
    $subject = "Nouveau message depuis le formulaire de contact";
    $message_content = "Nom: $nom\n";
    $message_content .= "Prénom: $prenom\n";
    $message_content .= "Email: $email\n";
    $message_content .= "Message:\n$message";

    // Envoi de l'e-mail
    $headers = "From: $email";
    if (mail($to, $subject, $message_content, $headers)) {
        echo "<p>Votre message a été envoyé avec succès.</p>";
    } else {
        echo "<p>Une erreur s'est produite lors de l'envoi du message.</p>";
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

<!--PAGE ACCUEIL-->

<div class="d-flex flex-column justify-content-between full-vh">

    <!--NAVBAR-->

    <nav class="navbar navbar-expand-lg p-4 clr1 w-100 z-3 ">
        <div class="container-fluid">
            <a class="navbar-brand text-light">Lucas BLEAU</a>
            <button class="navbar-toggler m-3 border border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <p class="text-light p-0 m-0">Menu</p>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item mx-3 d-flex align-items-center justify-content-center bg-light rounded-2">
                        <a class="nav-link px-3 my-auto txt-clr1 text-center " href="index.html">Accueil</a>
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
                </ul>
            </div>
        </div>
    </nav>

    <!--FIN NAVBAR-->

    <div class="container d-flex justify-content-center align-items-center my-5">
        <div class="row row-cols-md-1 m-0 justify-content-center align-items-center h-100">
            <div class="col-5 col-md-3 text-center pb-md-0 pb-3">
                <img class="img-thumbnail w-75 rounded-5 min-with-img" src="photo/BLEAU_Lucas.jpg" alt="photo">
            </div>
            <div class="col-12 col-md-7 img-thumbnail py-md-4 mx-md-5 rounded-2 align-self-center text-center px-5">
                <h3 class="mb-0">Bienvenue sur mon site ! </h3>
                <br>
                Je m'appelle <span class="text-primary">Lucas Bleau</span>,
                j'ai 20 ans et je suis actuellement en deuxième année de <span class="text-primary">BTS SIO</span> (Services Informatiques aux Organisations).
                <br> <br>
                Passionné par le monde de <span class="text-primary">l'informatique</span>
                depuis mon plus jeune âge, j'ai toujours été fasciné par les possibilités infinies qu'offre ce domaine en constante évolution.
                <br> <br>
                Je m'intéresse davantage au <span class="text-primary">développement web</span>,
                que je continue d'apprendre grâce à ma spécialisation en option <span class="text-primary">SLAM</span>,
                ainsi que par les défis liés à la <span class="text-primary">cybersécurité</span>.
                <br> <br>
                Mon parcours académique en <span class="text-primary">BTS SIO</span> m'a permis d'approfondir
                mes connaissances dans divers domaines de <span class="text-primary">l'informatique</span>,
                tout en acquérant des compétences pratiques et essentielles.
                <br> <br>
                <h5>Je vous souhaite une bonne navigation sur mon site !</h5>
            </div>
        </div>
    </div>

    <!--FOOTER-->

    <div class="bottom-0 w-100 p-4 clr1">
        <div class="row">
            <div class="col-12 col-lg-3 p-0 text-center">
                <a href="mailto:bleaulucas7@gmail.com" class="text-decoration-none text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="m-2" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                    </svg>
                    bleaulucas7@gmail.com
                </a>
            </div>
            <div class="col-12 col-lg-3 p-0 text-center" >
                <a href="tel:0610360128" class="text-decoration-none text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="m-2" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                    06 10 36 01 28
                </a>
            </div>
            <div class="col-12 col-lg-3 p-0 text-center">
                <a href="https://github.com/lucasbleau" class="text-decoration-none text-light" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="m-2" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                    </svg>
                    lucasbleau
                </a>
            </div>
            <div class="col-12 col-lg-3 p-0 text-center">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="text-decoration-none text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                        </svg>
                        Formulaire de contact
                    </div>
                </button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Formulaire de contact</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body text-start">

                                <form class="row g-3 d-flex justify-content-center">
                                    <div class="col-md-6">
                                        <label for="validationNom" class="form-label text-start">Nom</label>
                                        <input type="text" class="form-control" id="validationNom" name="nom" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationPrenom" class="form-label">Prenom</label>
                                        <input type="text" class="form-control" id="validationPrenom" name="prenom" required>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="validationEmail" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="validationEmail" name="email" aria-label="validationEmail">
                                    </div>

                                    <div class="col-lg d-flex align-self-end h-50">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" id="flexCheckDefault" required aria-label="flexCheckDefault">
                                        </div>
                                        <label class="input-group-text w-100" for="flexCheckDefault">J'accepte que mon email soit utilisé</label>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary" type="submit">Envoyer</button>
                                    </div>
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FIN FOOTER-->

</div>

<!--FIN PAGE ACCUEIL-->

<!--SCRIPT-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<!--FIN SCRIPT-->

</body>
</html>
