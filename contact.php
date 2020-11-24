<?php include('./includes/header.php') ?>

    <div class="sectionContact txtcenter">
        <span class="title">Contactez moi</span>

        <br /><br /><br /><br />

        <div class="mailPhone">
            <div>
                <div class="picto">
                    <img src="./img/mail.svg" height="30px" width="auto">
                </div>
                <div class="info">
                    <span class="jaune">Mail</span>
                    <span class="blanc">contact@juliencolmont.fr</span>
                </div>
            </div>
            <div>
                <div class="picto">
                    <img src="./img/tel.svg" height="40px" width="auto">
                </div>
                <div class="info">
                    <span class="jaune">Téléphone</span>
                    <span class="blanc">06.31.58.69.46</span>
                </div>
            </div>
        </div>

        <br /><br />

        <div class="formContact">
            <?php
                include('./script_php/security.php');
                include('./script_php/email.php');

                if (isset($_POST['sub_form'])) {
                    $nom_complet = security($_POST['nom_complet']);
                    $email = security($_POST['email']);
                    $sujet = addslashes(security($_POST['sujet']));
                    $message = addslashes(security($_POST['message']));
                    if ($nom_complet && $email && $sujet && $message) {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            if (strlen($message) >= 30) {
                                $req_form = $bdd->exec("INSERT INTO contact VALUES ('', '$nom_complet', '$email', '$sujet', '$message',NOW(),'false')");
                                /* on génère et envoie le mail à Julien */
                                $destinataire = $email;
                                $titre = "Nouveau formulaire de contact";
                                $msgHTML = "Julien, une nouvelle personne vient d'envoyer un formulaire de contact !";
                                $msgHTML .= "Voici les informations !<br /><br />";
                                $msgHTML .= "<b>".$nom_complet."</b><br />";
                                $msgHTML .= "<b>".$email."</b><br />";
                                $msgHTML .= "<b>Sujet :</b> ".$sujet."<br />";
                                $msgHTML .= $message."<br /><br />";
                                $msgHTML .= "<i>Mail envoyé depuis le site de Julien Colmont.</i>";
                                $mail = sendMail($destinataire, $titre, $msgHTML);
                                if ($mail) {
                                    echo "<div class='alertSuccess width_100'>Un mail a été envoyé à Julien Colmont !</div><br />";
                                } else {
                                    echo "<div class='alertError width_100'>Une erreur est survenue (email) !</div><br />";
                                }
                                echo "<div class='alertSuccess width_100'>Message envoyé avec succès !<br />Je vous contact dans les plus brèves délais !</div>";
                            } else echo "<div class='alertError width_100'>Votre message est trop court !</div>";
                        } else echo "<div class='alertError width_100'>Votre adresse mail n'est pas correcte !</div>";
                    } else echo "<div class='alertError width_100'>Veuillez remplir tous les champs !</div>";
                }
            ?>

            <form action="" method="post" autocomplete="off">
                <input type="text" class="inputHype" name="nom_complet" placeholder="Nom complet" /><br /><br />
                <input type="email" class="inputHype" name="email" placeholder="Adresse mail" /><br /><br />
                <input type="text" class="inputHype" name="sujet" placeholder="Sujet du formulaire" /><br /><br />
                <textarea name="message" class="textareaHype" rows="10" placeholder="Votre message..."></textarea><br /><br />
                <input type="submit" class="btnSend" name="sub_form" value="Envoyer" />
            </form>
        </div>
        
    </div>

<?php include('./includes/footer.php') ?>