<?php include('./includes/header.php') ?>

    <div align="center">
        <img src="./img/logo.svg" with="auto" height="40%" class="logo" />
    </div>

    <div class="txtcenter">
        <span class="title">Ce que je fais...</span>

        <br /><br /><br /><br />

        <div class="workingFlex">
            <div>
                <img src="./img/creativite.svg" />
                <span class="titleWorking">Créativité</span>
                <div class="separator"></div>
                <span>
                    Je crée des visuels pour tous vos supports de communication : Identité visuelle, édition & print, signalétique et illustartion…
                </span>
            </div>
            <div>
                <img src="./img/application.svg" />
                <span class="titleWorking">Application</span>
                <div class="separator"></div>
                <span>
                    Chaque création est pensée pour mettre votre projet en valeur, et perfectionnée pour répondre parfaitement à vos attentes.
                </span>
            </div>
            <div>
                <img src="./img/communication.svg" />
                <span class="titleWorking">Communication</span>
                <div class="separator"></div>
                <span>
                    Besoin d’une communication visuelle efficace pour votre entreprise ou un projet personnel ? Discutons-en afin de bien cerner vos besoins.
                </span>
            </div>
        </div>
    </div>

    <div class="sectionLastProjects txtcenter">
        <span class="title">Mes derniers projets</span>

        <br /><br /><br /><br />

        <div class="galerie">
            <?php
                $req_galerie = $bdd->query("SELECT * FROM galerie ORDER BY id DESC LIMIT 6");
                while ($data_galerie = $req_galerie->fetch()) {
                    ?>
                        <div class="projet">
                            <img src="<?php echo $data_galerie['lien_img']; ?>" class="illustration" />
                            <div class="descriptionProjet">
                                <span><?php echo $data_galerie['titre']; ?></span>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>

        <a href="/portfolio">Voir tous mes projets</a>
    </div>

    <div class="sectionLastProjects">


    </div>

<?php include('./includes/footer.php') ?>