<?php
//require_once __DIR__ . '/index7.php';
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/GuestBookRecord.php';
require_once __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/classes/News.php';


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/edit.ico" type="image/x-icon">
    <!--    Link Bootstrap4.4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <!--Link icons bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!--    Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Noto+Sans+HK&display=swap" rel="stylesheet">
    <!--    Link Css-->
    <link rel="stylesheet" href="style.css">
    <title> Lesson 7</title>
</head>
<body class="container-fluid">
<nav class="fixed-top navbar navbar-expand bg-dark navbar-dark">
    <div class="container">
        <m class="display-4 navbar-brand js-scroll-trigger"><i class="bi bi-vector-pen" style="font-size: 1.5rem"></i>
            Lesson 7
        </m>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/index.html">Lessons</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br>
<header>
    <div class="row">
        <div class="col-12 text-center">
            <h4><i class="bi bi-laptop" style="font-size: 2rem"></i> PHP OOP</h4>
        </div>
    </div>
    <hr>
</header>
<main class="container-fluid">
    <!--    News   -->
    <div class="container-fluid">
        <h4><i class="bi bi-file-text-fill"></i> News</h4>
        <div class="jumbotron row">
            <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/81F4/production/_118486233_gettyimages-1229892674.jpg"
                 class="col-sm-4 col-md-4 col-lg-4">
            <div class="col-sm-8 col-md-8 col-lg-8">
                <a href="template/article1.php" class="font-weight-bold text-reset title"><i class="bi bi-bookmark-fill"></i>
                    Tesla will no
                    longer accept Bitcoin over climate concerns, says Musk</a>
                <p>Tesla has suspended vehicle purchases using Bitcoin due to climate change concerns, its CEO Elon Musk
                    said in a tweet.</p>
            </div>
        </div>
        <hr>
        <div class="jumbotron row">
            <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/60C9/production/_118477742_gettyimages-1310179631.jpg"
                 class="col-sm-4 col-md-4 col-lg-4">
            <div class="col-sm-8 col-md-8 col-lg-8">
                <a href="template/article2.php?id=2" class="font-weight-bold text-reset title"><i class="bi bi-bookmark-fill"></i>
                    Amazon has €250m
                    'back taxes' overturned in court</a>
                <p>Amazon has won a court battle over €250m (£215m) in taxes it had been ordered to pay Luxembourg.</p>
            </div>
        </div>
        <hr>
    </div>
    <!--   Guestbook   -->
    <div>
        <div class="container">
            <div class="col-12 text-center">
                <h3><i class="bi bi-book"></i> Guestbook</h3>
                <hr>
            </div>
            <div class="row ">
                <div class="col-12 jumbotron">
                    <ul class="list-unstyled">
                        <?php $guestBook = new GuestBook();
                        foreach ($guestBook->getRecords() as $record) {
                            ?>
                            <li class="media">
                                <i class="mr-3 bi bi-file-person-fill" style="font-size: 4rem"></i>
                                <div class="media-body">
                                    <p class="mt-0 mb-1 font-weight-bold"> Guest User</p>
                                    <?php echo $record->getMessage(); ?>
                                </div>
                            </li>
                            <hr>
                        <?php } ?>

                    </ul>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <p>Form </p>
                        <form action="append.php" method="post">
                            <div>
                                <label for="text">
                                    <textarea name="text" id="text" placeholder='Text...'></textarea>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-dark"><i class="bi bi-folder-plus"></i> add</button>
                        </form>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</main>

<footer class="container-fluid">
    <div class="row">
        <div class="col-11 text-right">
            <p> cover by @archi <i class="bi bi-box"></i> 2021 <i class="bi bi-bootstrap-fill"
                                                                  style="font-size: 1.5rem"></i></p>
        </div>
        <div class="col-1"></div>
    </div>
</footer>
</body>
</html>