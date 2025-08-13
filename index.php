<!DOCTYPE html>
<html lang="en">
<head>
    <title>CONTOH WEB PHP</title>
    <meta charset="UTF-8">
    <meta name="description" content="guru tkj">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">WEB PHP</h1>
        <h3 class="desc">buat web php pemula</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">HOME</a></li>
                <li><a href="index.php?page=about">ABOUT</a></li>
                <li><a href="index.php?page=contact">CONTACT</a></li>
            </ul>
        </nav>
        <section>
            
        </section>

    </header>

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include "home.php";
                break;
            case 'about':
                include "about.php";
                break;
            case 'contact':
                include "contact.php";
                break;
        }
    } else {
        include "home.php";
    }
    ?>

    <footer>
        &copy; Copyright MARIO 2025
    </footer>
</body>
</html>
