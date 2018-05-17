<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/style.css" />
        <title>BDE - ESAIP</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <header>
               <?php include("template/header.php"); ?>
            </header>
            <div id="banniere_image">
                <div id="banniere_description">
                    Information BDE
                    <a href="#" class="bouton_rouge">Voir article <strong>-></strong></a>
                </div>
            </div>
            <section>
                <article>
                    <h1><img src="style/curriculum-vitae.png" height="35" alt="Résumé" class="ico_categorie" />Résumé</h1>
                    <p><strong>En Bref :</strong>Le BDE ESAIP est une association à but non lucratif d'étudiants qui propose au sein de leurs école des activités diverses.</p>
                    <p>Nous proposons ainsi des animaions sportive en lien avec le bureau des sports, des soirées, et des évenements en tous genre.</p> <br>
                    <p>
                        <?php
                        echo "Salut ! Bienvenue sur mon site !<br />";
                        ?>
                    </p>
                <form action="Site.php" method="post" >
                    <p>
                        <label for="pseudo">Votre age :</label>
                        <input type="number" name="age" id="age" placeholder="Ex : 12" size="30" maxlength="10" />
                    </p>
                    <p>
                        <?php
                            if ($_POST['age'] <= 12) // SI l'âge est inférieur ou égal à 12
                            {
                                echo "Salut gamin ! Bienvenue sur mon site !<br />";
                                $autorisation_entrer = "Oui";
                            }
                            if ($_POST['age'] >= 12)  // SINON
                            {
                                echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au    revoir !<br  />";
                                $autorisation_entrer = "Non";
                            }
                                echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
                        ?>
                    </p>
                </form>
                </article>
                <aside>
                    <h1> THE OWLBLACK BDE</h1>
                    <p id="photo_zozor"><img src="style/BDE.jpg" alt="Photo de BDE" /></p>
                    <p>Laisse-nous le temps de nous présenter&nbsp;: Nous sommes une dizaine d'étudiants de l'esaip. Ecole d'ingénieur et d'enseignement supérieur, spécialisé dans l'informatique et la sécurité prévention des riques.<br></p>
                    <p><img src="style/tn_facebook.png" alt="Facebook" /><img src="style/tn_twitter.png" alt="Twitter" /><img src="style/tn_flickr.png" alt="Flickr" /><img src="style/tn_rss.png" alt="RSS" /></p>
                </aside>
            </section>
            <footer>
                     <?php include("template/footer.php"); ?>
            </footer>
        </div>
    </body>
</html>
