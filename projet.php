<?php include('./includes/header.php') ?>

<?php
    if (!$this->params['id']) {
        header('Location:/home');
    }

    $projetId = $this->params['id'];
    $reqVerifProjet = $bdd->query("SELECT COUNT(id) AS countid FROM projets WHERE id='$projetId'");
    $reqVerifProjetFetch = $reqVerifProjet->fetch();
    if ($reqVerifProjetFetch['countid'] == 0) {
        header('Location:/home');
    }
?>

    <?php
        $reqProjet = $bdd->query("SELECT * FROM projets WHERE id='$projetId'");
        while ($dataProjet = $reqProjet->fetch()) {
            ?>
                <div class="sectionLastProjects txtcenter">
                    <div class="projets">
                        <div class="projet">
                            <div class="nom"><?php echo $dataProjet['nom']; ?></div>
                            <div class="details_projet">
                                <div class="description">
                                    <span>Description</span>
                                    <p><?php echo $dataProjet['description']; ?></p>
                                </div>
                                <div class="details">
                                    <span>Détails</span>
                                    <p>
                                        <?php echo "<span class='square'></span> Réalisé en ".$dataProjet['annee_creation']; ?><br />
                                        <?php if ($dataProjet['taille'] != "0") {echo "<span class='square'></span> Taille : ".$dataProjet['taille']."<br />";} ?>
                                        <?php if ($dataProjet['nbr_pages'] != 0) {echo "<span class='square'></span> ".$dataProjet['nbr_pages']." page(s)";} ?>
                                    </p>
                                </div>
                                <div class="categorie">
                                    <span>Catégorie</span>
                                    <p>
                                        <?php if ($dataProjet['edition'] != "0") {echo "<span class='square'></span> ".$dataProjet['edition']."<br />";} ?>
                                        <?php if ($dataProjet['categorie'] != "0") { echo "<span class='square'></span> ".$dataProjet['categorie']; } ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="allImgProjet">
            <?php
            $reqContentProjet = $bdd->query("SELECT * FROM projets_all_img WHERE id_projet='$projetId'");
            while ($contentProjet = $reqContentProjet->fetch()) {
                ?>

                    <div class="illu"><img src="/projets/<?php echo $contentProjet['illustration']; ?>" /></div>

                <?php
            }
            ?>
            </div>

            <?php
        }
    ?>

<?php include('./includes/footer.php') ?>