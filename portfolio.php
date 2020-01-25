<?php include('./includes/header.php') ?>

    <div class="sectionLastProjects txtcenter">
        <span class="title">Tous mes projets</span>

        <br /><br /><br /><br />

        <div class="galerie">
            <?php
                $req_galerie = $bdd->query("SELECT * FROM galerie ORDER BY id DESC");
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
    </div>

<?php include('./includes/footer.php') ?>