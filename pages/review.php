<?php


$sql = "SELECT comments.*, user.first_name
FROM comments 
JOIN user ON user.id = comments.user_id
ORDER BY id ASC;";
$stmt = $pdo->query($sql);
$comments = $stmt->fetchAll();

?>


<section class="container">

    <section class="carte-commentaire">
        <div class="container-titre-review">
            <h1 class="titre-review">Les smarpthones les mieux notés</h1>
        </div>

        <?php
        foreach ($comments as $comment) {
            $product_id = $comment['item_id'];
        ?>
            <article class="description-com">
                <div>

                    <div class="img-et-profil">
                        <img src="https://cdn-icons-png.freepik.com/256/552/552848.png?semt=ais_hybrid" alt="image-profil">
                        <h2><?= $comment ['first_name']?></h2>
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


        <div class="btn-review">
            <a href="#" class="voir-com">Voir les autres commentaires</a>
        </div>


    </section>

