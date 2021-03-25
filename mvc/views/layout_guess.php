<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Login</title>

    <link rel="canonical" href="<?=BASE_URL?>">
    <!-- Bootstrap core CSS -->
    <link href="<?=BASE_URL?>public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="icon" href="<?=BASE_URL?>public/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <!-- Custom styles for this template -->
    <link href="<?=BASE_URL?>public/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-signin">
        <?php
        if (isset($content)) {
            require_once $content.'.php';
        }
        ?>
    </main><!-- /.container -->
    <script src="<?=BASE_URL?>public/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
