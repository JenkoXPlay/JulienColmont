<?php include('./includes/header.php') ?>

    <div class="sectionLastProjects txtcenter">
        <span class="title">Tous mes projets</span>

        <br /><br /><br /><br />

        <div class="projets">
            <?php
                $req_projet = $bdd->query("SELECT * FROM projet ORDER BY id DESC");
                while ($data_projet = $req_projet->fetch()) {
                    ?>
                        <div class="projet">
                            <div class="nom"><?php echo $data_projet['nom']; ?></div>
                            <img src="./projets/<?php echo $data_projet['illustration']; ?>" class="illustration" />
                            <div class="details_projet">
                                <div class="description">
                                    <span>Description</span>
                                    <p><?php echo $data_projet['description']; ?></p>
                                </div>
                                <div class="details">
                                    <span>Détails</span>
                                    <p>
                                        <?php echo "<font color='#FFAC09'>-</font> Réalisé en ".$data_projet['annee_realisation']; ?><br />
                                        <?php if ($data_projet['taille'] != "0") {echo "<font color='#FFAC09'>-</font> Taille : ".$data_projet['taille']."<br />";} ?>
                                        <?php if ($data_projet['page'] != 0) {echo "<font color='#FFAC09'>-</font> ".$data_projet['page']." page(s)";} ?>
                                    </p>
                                </div>
                                <div class="categorie">
                                    <span>Catégorie</span>
                                    <p>
                                        <?php if ($data_projet['edition'] != "0") {echo "<font color='#FFAC09'>-</font> ".$data_projet['edition']."<br />";} ?>
                                        <?php echo "<font color='#FFAC09'>-</font> ".$data_projet['categorie']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>

<?php include('./includes/footer.php') ?>