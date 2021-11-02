<?php
    $url = $_SERVER['REQUEST_URI'];
    $requestUri = explode('/', explode('?', $url)[0]);
    if(count($requestUri) > 0)
        $href = $requestUri[count($requestUri) - 1];
    else
        $href = '';
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <form action="#" class="searchform order-lg-last">
            <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="Search">
                <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if($href === '' || $href === 'index.php') echo 'active'?>"><a href="index.php" class="nav-link">Accueil</a></li>
                <li class="nav-item <?php if($href==='about.php') echo 'active'?>"><a href="about.php" class="nav-link">Qui sommes nous</a></li>
                <li class="nav-item <?php if($href==='team.php') echo 'active'?>"><a href="team.php" class="nav-link">Notre équipe</a></li>
                <li class="nav-item <?php if($href==='project.php') echo 'active'?>"><a href="project.php" class="nav-link">Projet</a></li>
<!--                <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
                <li class="nav-item <?php if($href==='contact.php') echo 'active'?>"><a href="contact.php" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

