<?php include('./includes/header.php') ?>

    <div class="sectionLastProjects txtcenter">
        <span class="title">Tous mes projets</span>

        <br /><br /><br /><br />

        <div class="galerie">
            <?php
                $req_galerie = $bdd->query("SELECT * FROM projets ORDER BY id DESC");
                while ($data_galerie = $req_galerie->fetch()) {
                    ?>
                        <div class="projet">
                            <img src="/projets/<?php echo $data_galerie['illustration']; ?>" class="illustration" />
                            <div class="descriptionProjet">
                                <div>
                                    <a href="/projet/<?php echo $data_galerie['id']; ?>"><?php echo $data_galerie['nom']; ?></a>
                                    <br><br>
                                    <span><?php if ($data_galerie['edition'] != "0") { echo $data_galerie['edition']; } ?></span>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>

<?php include('./includes/footer.php') ?>