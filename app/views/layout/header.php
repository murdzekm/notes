<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= $data['page_title'] . " | " . WEBSITE_TITLE ?></title>
    <link rel="stylesheet" href="<?= ASSETS ?>css/template.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
          crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ASSETS ?>css/mdb.min.css"/>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fe02db7a73.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mb-8">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= ROOT ?>"><i class="fas fa-clipboard"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= ROOT ?>notes">Notatki</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ROOT ?>notes/add">Nowa notatka</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mx-2 my-2 my-lg-0">
                        <?php if (!isset($_SESSION['username']) && !isset($_SESSION['url_address'])): ?>
                            <li><a class="nav-link active" aria-current="page" href="<?= ROOT ?>login">Zaloguj</a></li>
                            <li><a class="nav-link active" aria-current="page" href="<?= ROOT ?>signup">Rejestracja</a>
                            </li>
                        <?php else: ?>
                            <li><a href="<?= ROOT ?>users"" class="nav-link
                                active"><?php if (isset($_SESSION['username']) && isset($_SESSION['url_address'])): ?>
                                Witaj <?= $_SESSION['username'] ?>!
                                <?php endif; ?></a></li>
                            <li><a class="nav-link active" aria-current="page" href="<?= ROOT ?>logout">Wyloguj</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
        </div>
    </nav>

