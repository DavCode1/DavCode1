



<div class="desc-tel">
    <div class="desc-img">

        <img src="public/img/<?= $id?>/<?=$images[$id][0]?>" alt="samsung-galaxy-s24-ultra-violet" class="img-in-div">
    </div>

    <div class="desc">
        <h1 class="desc-texte"><?= $product["label"];?></h1>
        <p>Lancement - Janvier 2024</p>
        <div class="desc-gamme">
            <span class="gamme">PREMIUM</span>
            <span>à partir de <?= $product["price"];?> €</span>
        </div>
    </div>
</div>

<div class="point-forts-faibles">
    <div class="pt-forts">
        <div class="desc-signe">
        <img src="public/gallerie/add_148781.png" alt="signe-plus" class="signe">
        <span class="titre-résumé">Points forts</span>
    </div>
        <ul>
           <li> Très bonne performance globale de l'affichage, offrant une bonne lisibilité et la meilleure expérience de sa catégorie en extérieur.</li>
           <br>
            <li> Très bonne expérience photo, avec des clichés offrant des couleurs vives et agréables dans toutes les conditions.</li>
            <br>
            <li> Photos de portrait naturelles dans des conditions de lumière favorables.</li>
            <br>
            <li> Caméra polyvalente offrant une haute qualité d'image sur plusieurs plages de zoom.</li>
        </ul>
    </div>

    <div class="pt-faibles">
    <div class="desc-signe">
        <img src="public/gallerie/minus_9679562.png" alt="signe-moins" class="signe">
        <span class="titre-résumé">Points faibles</span>
    </div>
        <ul>
            <li>Visionnage de vidéos inconfortable en raison de la luminosité excessive de l'écran en basse lumière.</li>
            <br>
            <li>Limitations dans la capture d'images en basse lumière, avec une perte significative de détails et du bruit visible.</li>
            <br>
            <li>Instabilités lors de la prise de vidéos.</li>
            <br>
            <li>Difficulté à capturer l'instant avec précision, notamment dans des conditions difficiles.</li>

        </ul>
    </div>
</div>



<table class="table">
    <tr class="color2">
        <td>Prix</td>
        <td><?= $product["price"];?> €</td>
    </tr>
    <tr class="color1">
        <td>Capacité stockage</td>
        <td><?= $product["storage_capacity"];?>Go</td>
    </tr>
    <tr class="color2">
        <td>Capacité ram</td>
        <td><?= $product["ram_capacity"];?>Go Ram</td>
    </tr>
    <tr class="color1">
        <td>Capacité batterie</td>
        <td><?= $product["battery_capacity"];?>mAh</td>
    </tr>
    <tr class="color2">
        <td>Réseau</td>
        <td><?= $product["network"];?></td>
    </tr>
    <tr class="color1">
        <td>Qualité d'écran</td>
        <td><?= $product["screen quality"];?></td>
    </tr>
    <tr class="color2">
        <td>Taille</td>
        <td><?= $product["size"];?>"</td>
    </tr>

</table>


<div class="tags">
    <div class="tag-item">
        <img src="public/gallerie/stylet2.png" alt="img-stylet" class="img-tags">
        <div class="texte-tags">
            <span class="rouge">Sans</span>
        </div>
    </div>
    <div class="tag-item">
        <img src="public/gallerie/pliable2.png" alt="img-pliable" class="img-tags">
        <div class="texte-tags">
            <span class="rouge">Sans</span>
        </div>
    </div>
    <div class="tag-item">
        <img src="public/gallerie/waterproof_7933396.png" alt="img-waterproof" class="img-tags">
        <div class="texte-tags">
            <span class="vert">Avec</span>
        </div>
    </div>
    <div class="tag-item">
        <img src="public/gallerie/disponibilité.png" alt="img-disponibilité" class="img-tags">
        <div class="texte-tags">
            <span class="vert">En vente</span>
        </div>
    </div>
</div>


