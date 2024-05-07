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
                    'catalog' => 'Catalogue',
                    // 'description' => 'description',
                    'review' => 'review',
                    'register' => 'Inscription',
                    'logout' => 'Déconnexion',
                    'profile' => 'Profil',
                    'product' => 'description',
                    'contact' => 'Contact',
                    'login' => 'connexion',
                ];

                foreach ($menu as $href => $label) {
                    // echo '<li><a href="index.php?page=' . $href . '">' . $label . '</a></li>';
                    printf('<li><a href="index.php?page=%s">%s</a></li>', $href, $label);
                }
                
                

                ?>

            </ul>
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
          <div>
            <h1>NOUS CONTACTER</h1>
            </div>
            <div class="reseau">
                <span>Réseaux sociaux</span>
                <a href="#"><img src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/62-instagram-512.png" alt="" class="img-footer" ></a>
                <a href="#"><img src="https://1000logos.net/wp-content/uploads/2017/06/Twitter-Log%D0%BE.png" alt="" class="img-footer"></a>
                <a href="#"><img src="https://static.vecteezy.com/system/resources/previews/023/986/704/non_2x/youtube-logo-youtube-logo-transparent-youtube-icon-transparent-free-free-png.png" alt="" class="img-footer"></a>
            </div>


        

        </div>

        <!-- <div>
            <img src="img/map.png" alt="Carte locale de l'EFP">
        </div> -->
<!-- 
        <div>
            <ul>
                <li><a href="#">Lien 1</a></li>
                <li><a href="#">Lien 2</a></li>
                <li><a href="#">Lien 3</a></li>
                <li><a href="#">Lien 4</a></li>
            </ul> -->
            <!-- partenaires/liens/CGV -->
        <!-- </div> -->

        <div>
            &copy; <?php echo date('Y'); ?>
            <span>Uphone</span>
            <!-- copyright -->
        </div>
    </footer>
</body>

</html>