<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php single_post_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <!-- main container start -->
    <div class="main-container">
        <div class="header">
            <a href="/"><img class="logo" src="http://sollicitatiewebit.local/wp-content/uploads/2024/09/logo.png" alt="Logo"></a>
            <span class="hamburger" onclick="toggleMenu()"><i class="fa-solid fa-bars"></i></span>
            <div class="nav-menu">
                <nav>
                    <ul>
                        <li><a href="/#aanbod">Aanbod</a></li>
                        <li><a href="/over-ons">Over ons</a></li>
                        <li><a href="/realisaties">Realisaties</a></li>
                        <li><a id="contact" href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>