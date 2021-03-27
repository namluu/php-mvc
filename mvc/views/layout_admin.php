<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Admin</title>

    <link rel="canonical" href="<?=BASE_URL?>">
    <!-- Bootstrap core CSS -->
    <link href="<?=BASE_URL?>public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" href="public/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="public/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="public/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="public/favicons/manifest.json">
    <link rel="mask-icon" href="public/favicons/safari-pinned-tab.svg" color="#7952b3"> -->
    <link rel="icon" href="<?=BASE_URL?>public/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <!-- Custom styles for this template -->
    <link href="<?=BASE_URL?>public/css/starter-template.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?=ADMIN_URL?>">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">CMS</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?=ADMIN_URL?>/category">Category</a></li>
                        <li><a class="dropdown-item" href="<?=ADMIN_URL?>/article">Article</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav px-3">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Hello: Admin</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="<?=ADMIN_URL?>/admin/logout">Sign out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container">
    <?php
    if (isset($content)) {
        require_once $content.'.php';
    }
    ?>
</main><!-- /.container -->

<script src="<?=BASE_URL?>public/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="<?=BASE_URL?>public/js/admin.js"></script>
</body>
</html>
