<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- sweetalert -->
    <link rel="stylesheet" href="/sweetalert/sweetalert2.min.css">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- font -->
    <link rel="stylesheet" href="/css/fonts.css">

    <!-- custom css -->
    <link rel="stylesheet" href="/css/custom.css">

</head>

<body>
    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>





    <!--    footer -->
    <section class="footer-social">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="copyrights">&copy; Copyright 2020 Design By <strong><a href="https://github.com/arul-25" target="_blank"><i class="fab fa-github"> </i> arul-25</a></strong> | Made With <a href="https://getbootstrap.com/" target="_blank" class="bootstrap"><i class="fab fa-bootstrap"></i> Bootstrap</a></p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/npm.js"></script>

    <!-- sweetalert -->
    <script src="/sweetalert/sweetalert2.all.min.js"></script>

    <!-- custom js -->
    <script src="/js/custom.js"></script>
</body>

</html>