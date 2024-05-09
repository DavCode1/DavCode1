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
            <ul>
              <li></li> 
                <?php
                $menu = [
                    'home' => 'Accueil',
                    'catalog' => 'Catalogue',
                    // 'description' => 'description',
                    'review' => 'review',
                    // 'logout' => 'Déconnexion',
                    // 'profile' => 'Profil',
                    // 'product' => 'description',
                    'register' => 'Inscription',
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
            
            <div class="reseau">
                <div class="liens">
                    <span>Pour se diriger vers le site officiel de Samsung</span>
                    <a href="https://www.samsung.com/be_fr/">Clique ici</a>
                </div>
                
                <div class="contacter">
                <a href="#"><img src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/62-instagram-512.png" alt="" class="img-footer" ></a>
                <a href="#"><img src="https://1000logos.net/wp-content/uploads/2017/06/Twitter-Log%D0%BE.png" alt="" class="img-footer"></a>
                <a href="#"><img src="https://preview.redd.it/reddit-logo-redesign-im-a-beginner-please-give-feedback-v0-gcq0tibqk7ia1.png?width=640&crop=smart&auto=webp&s=86527fde8d3071955ad6de871f66abfcb671f879" alt="" class="img-footer"></a>
            </div>
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