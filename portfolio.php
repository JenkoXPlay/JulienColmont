<?php include('./includes/header.php') ?>

    <div class="sectionLastProjects txtcenter">
        <span class="title">Tous mes projets</span>

        <br /><br /><br /><br />

        <div class="galerie">
            <?php
                $req_galerie = $bdd->query("SELECT * FROM projets ORDER BY id");
                while ($data_galerie = $req_galerie->fetch()) {
                    ?>
                        <div class="projet">
                            <img src="/projets/<?php echo $data_galerie['illustration']; ?>" class="illustration" />
                            <div class="descriptionProjet">
                                <a href="/projet/<?php echo $data_galerie['id']; ?>"><?php echo $data_galerie['nom']; ?></a>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>

<?php include('./includes/footer.php') ?>