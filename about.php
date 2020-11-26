<?php include('./includes/header.php') ?>

    <div class="logoAbout">
        <div class="imgLogo">
            <!-- <img src="./img/logo.svg" width="auto" height="50%" class="logo" /> -->
            <img src="./img/profil.jpg" width="70%" height="auto" class="logo" />
        </div>
        <div class="descAbout">
            <div>
                <span>
                    Julien Colmont, je suis graphiste freelance.<br />
                    Je vous apporte mes compétences et mon savoir-faire dans la réalisation de vos projets graphique.
                </span>
                <br /><br />
                <span>
                    Mon but est de vous apporter des solutions personnalisées en adéquation avec vos besoins, car vous êtes unique et vos projet aussi. Que vous soyez un particulier, une entreprise, une commune ou une association.
                </span>
                <br /><br />
                <span>
                    Mes maîtres-mots : créativité, curiosité et passions...<br />
                    Alors n'hésitez pas ! Contactez-moi pour que vos projets deviennent réalité.
                </span>
            </div>
        </div>
    </div>

    <br /><br />

    <div class="about txtcenter">
        <span class="title">Découvrir mon Shop</span>
        
        <div class="description">
            Après plusieurs années de collaboration avec le Betiz Fest et des Projets personnels, je vous propose aujourd'hui de découvrir ou de redécouvrir mes illustrations que vous vous procurer sur différents supports.
        </div>

        <br /><br />

        <div class="discoverShop">
            <div class="subtitle">
                <div class="trait"></div>
                <span>clique ci-dessous pour découvrir</span>
            </div>

            <div class="contentShop">
                <img src="./img/shop1.jpg" id="openShop" />
                <img src="./img/shop2.jpg" id="openShop" />
                <img src="./img/shop3.jpg" id="openShop" />
                <img src="./img/shop4.jpg" id="openShop" />
            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    $("#openShop").click(function() {
                        window.open('https://shop.spreadshirt.fr/julien-colmont', '_blank');
                    });
                });
            </script>
        </div>

        <div class="width_100 margin_top_100">
            <a href="./files/Julien_Colmont_CV.pdf" download class="btnClickable">C.V</a>
            <a href="/portfolio" class="btnClickable">Portfolio</a>
        </div>
    </div>

<?php include('./includes/footer.php') ?>