<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,300;0,400;0,500;1,400&family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <!-- google icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- jQuery-->
    <script src="js/jquery-3.6.1.min.js"></script>
    <!-- my data -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>KÄÏ's Wonderland</title>
</head>
<body>
    <div class="body">
        <nav class="top_nav container-xxl">
            <ul class="row">
                <li class="col"><a href="index.php">KÄÏ</a></li>
                <li class="col"><a class="menu-open"><span class="material-symbols-rounded">sort</span></a></li>
            </ul>
        </nav>
        <div class="menu-guide">
            <div class="menu-bg"></div>
            <div class="menu-container container-xxl">
                <a class="menu-close"><span class="material-symbols-rounded">close</span></a>
                <div class="row menu-items">
                    <a href="index.php">
                        <h3 class="k_h3">首頁</h3>
                        <p>home</p>
                    </a>
                </div>
                <div class="row menu-items">
                    <a href="business.php">
                        <h3 class="k_h3">職人職能</h3>
                        <p>business ability</p>
                    </a>
                </div>
                <!-- <div class="row menu-items">
                    <a href="#">
                        <h3 class="k_h3">作品集</h3>
                        <p>Profolios</p>
                    </a>
                </div> -->
                <div class="row menu-items">
                    <a href="life.php">
                        <h3 class="k_h3">生活點滴</h3>
                        <p>Vlog</p>
                    </a>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $(".menu-open").click(function(){
                    $(".menu-guide").fadeIn(400);
                    // .css("display","block");
                })
                $(".menu-close").click(function(){
                    $(".menu-guide").fadeOut(400);
                })
            })
        </script>