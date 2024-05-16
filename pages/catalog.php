<?php
$sql = 'SELECT * FROM item ORDER BY id DESC';
$stmt = $pdo->query($sql);

$items = $stmt->fetchAll();

?>

<?php
$images = [];
// Ouvrir le répertoire actuel
$dir = 'public/img';

$directories = scandir($dir);
foreach ($directories as $directory) {

    if ($directory == '.' || $directory == '..' || !is_dir($dir . '/' . $directory)) {
        continue;
    }

    $files = scandir($dir . '/' . $directory);
    foreach ($files as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        $images[$directory][] = $file;
    }
}

?>

<section class="section-catalogue">
    <div class="header-catalogue">
        <h1 class="titre-catalogue">Tous les smartphones</h1>
        <input type="text" placeholder="Rechercher..." class="bdr-catalogue">
    </div>
    <section class="tout-produits">

        <?php
        foreach ($items as $item) {
            $id = $item['id'];
        ?>
            <div class="carte-produit">
                <a href="index.php?page=product&id=<?= $item['id'] ?>">
                    <img src="public/img/<?= $id ?>/<?= $images[$id][0] ?>" alt="Samsung S24 Ultra" class="produits-catalogues">
                </a>
                <h1><?= $item['label'] ?></h1>
                <div>
                    <button>En savoir plus</button>
                </div>
            </div>
        <?php
        }
        ?>

    </section>

</section>


<div class="data">
    <!-- Liste des éléments à afficher -->
</div>
<div class="pagination">
    <a href="#" class="prev">&laquo; Précédent</a>
    <a href="index.php?page=catalog" class="page">1</a>
    <a href="index.php?page=catalogue-page-2" class="page">2</a>
    <a href="index.php?page=catalogue-page-3" class="page">3</a>
    <a href="#" class="next">Suivant &raquo;</a>
</div>
