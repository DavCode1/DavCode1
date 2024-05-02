<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>

    <link rel="stylesheet" href="X75B.css">
    <link rel="stylesheet" href="uphone.css">

</head>

<body>
    <header class="nav" >
        <nav>
        <h1 class="titre-site"><img src="https://placehold.co/150x50?text=Uphone" alt="Uphone"></h1>
            <ul>
              <li></li> 
                <?php
                $menu = [
                    'home' => 'Accueil',
                    'contact' => 'Contact',
                    'catalog' => 'Catalogue',
                    'register' => 'Inscription',
                    'logout' => 'Déconnexion',
                    'profile' => 'Profil',
                    'product' => 'Item',
                ];

                foreach ($menu as $href => $label) {
                    // echo '<li><a href="index.php?page=' . $href . '">' . $label . '</a></li>';
                    printf('<li><a href="index.php?page=%s">%s</a></li>', $href, $label);
                }
                
                

                ?>

            </ul>
            <button class="btn-connexion">connexion</button>
        </nav>
    </header>

    <main id="<?php echo $_GET['page']; ?>">
        <?php
        if (file_exists($page))
            include $page;
        else
            include 'pages/home.html';
    
        ?>
    </main>
    <footer>
        <div>
            <!-- info contact -->
            <address>
                Uphone<br />
                02 386 70 58<br />
                uphonecontact@gmail.com
            </address>

            <nav>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">X</a>
            </nav>
        </div>

        <div>
            <img src="img/map.png" alt="Carte locale de l'EFP">
        </div>

        <div>
            <ul>
                <li><a href="#">Lien 1</a></li>
                <li><a href="#">Lien 2</a></li>
                <li><a href="#">Lien 3</a></li>
                <li><a href="#">Lien 4</a></li>
            </ul>
            <!-- partenaires/liens/CGV -->
        </div>

        <div>
            &copy; <?php echo date('Y'); ?>
            <!-- copyright -->
        </div>
    </footer>
</body>

</html>