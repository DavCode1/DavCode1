<?php
$sql = 'SELECT * FROM item ORDER BY id DESC';
$stmt = $pdo->query($sql);
$items = $stmt->fetchAll();


?>


<section>
    <div>
        <span class="titre-actu">Le samsung galaxy S24 est enfin là !</span>
        <div class="image-home-actu">
            <img src="public/img/s24-page-accueil.jpg" alt="#" class="image-actu" />
        </div>
        <div class="texte-actu">

            <p>Le Samsung Galaxy S24 est le dernier fleuron de la gamme Galaxy de Samsung, alliant des performances de pointe à un design élégant. Doté d'un écran époustouflant offrant une qualité d'image exceptionnelle, il est parfait pour les amateurs de contenu multimédia. Son processeur ultra-rapide assure une expérience utilisateur fluide, même lors de l'exécution des tâches les plus exigeantes. </p>
            <p>Avec une batterie longue durée et un ensemble impressionnant de fonctionnalités, le Galaxy S24 est conçu pour répondre aux besoins des utilisateurs les plus exigeants. Que ce soit pour la photographie, les jeux ou la productivité, le Samsung Galaxy S24 offre une expérience mobile de premier ordre.</p>
        </div>
    </div>


    <span class="titre-modele">Les derniers modèles</span>

    <section class="carousel-accueil">
    <?php
        foreach ($items as $item) {
            $id = $item['id'];
        ?>
                <?php
        }
        ?>


        <div class="carte-produit">
            <a href="index.php?page=product&id=1"><img src="public/img/1/S24.jpg" alt="Samsung S24" class="produits-catalogues"></a>
            <h1>Samsung Galaxy S24</h1>

        </div>


        <div class="carte-produit">
        <a href="index.php?page=product&id=2"><img src="public/img/galaxy-a55e.jpg" alt="Modèle A55" class="produits-catalogues"></a>
            <h1>Samsung A55 5G</h1>
            <div>

            </div>
        </div>



        <div class="carte-produit">
        <a href="index.php?page=product&id=3"><img src="public/img/3/Zfold 5.jpg" alt="Modèle A34" class="produits-catalogues"></a>
            <h1>Samsung Galaxy Zfold 5</h1>
            <div>

            </div>
        </div>


    </section>
    </div>
    </div>



    <span class="commentaires">Commentaires</span>
    <?php


    $sql = "SELECT comments.*, user.first_name
FROM comments 
JOIN user ON user.id = comments.user_id
ORDER BY id ASC;";
    $stmt = $pdo->query($sql);
    $comments = $stmt->fetchAll();

    ?>
    <section class="carte-commentaire">



        <?php
        foreach ($comments as $comment) {
            $product_id = $comment['item_id'];
        ?>
            <article class="description-com">
                <div>

                    <div class="img-et-profil">
                        <img src="https://cdn-icons-png.freepik.com/256/552/552848.png?semt=ais_hybrid" alt="image-profil">
                        <h2><?= $comment['first_name'] ?></h2>
                        <div class="ohmystars">
                            <?php
                            // for ($i = intval($comment['note']); $i > 0; --$i) {

                            for ($i = 0; $i < intval($comment['note']); ++$i) {
                            ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            <?php
                            }

                            for ($i = 5 - intval($comment['note']); $i > 0; --$i) {
                            ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            <?php
                            }
                            ?>

                        </div>
                    </div>

                    <p><?= $comment['message']; ?></p>

                </div>

                <img src="public/img/<?= $product_id ?>/<?= $images[$product_id][0] ?>" alt="samsungA52">
            </article>
        <?php
        }
        ?>

    </section>


    <div class="btn">
        <a href="index.php?page=review" class="btn-commentaires">voir les commentaires</a>
    </div>
</section>