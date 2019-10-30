<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Welkom op de site voor de jobdag van een groep nieuwe Webdevelopers die staan te springen om aan het werk te gaan.">
    <meta name="keywords" content="web developer, syntra Aalst, jobdag">
    <meta name="author" content="Front-end: Frederick Cosyn, Peter Ginneberge, Kristof Roelands Back-end: Mathias Camus">

    <title>home | jobdag webcreators aalst</title>


    <!-- sharing links facebook, twitter etc -->
    <!-- COMMON TAGS -->

    <meta name="image" content="https://webcreators-aalst.com/image.jpg">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Kom naar onze Jobdag">
    <meta itemprop="description" content="Een groep jonge enthousiaste web-developers op zoek naar een job">
    <meta itemprop="image" content="https://webcreators-aalst.com/image.jpg">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Kom naar onze Jobdag">
    <meta name="og:description" content="Een groep jonge enthousiaste web-developers op zoek naar een job">
    <meta name="og:url" content="https://webcreators-aalst.com/">
    <meta name="og:site_name" content="Web creators nadadfasf">
    <meta name="og:locale" content="nl_BE">
    <meta name="og:type" content="website">


    <!-- end of sharing -->



    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./img/favicon/site.webmanifest">

    <script src="https://kit.fontawesome.com/1df4c08b07.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Rajdhani|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <div class="bg flex col jcSb aiCenter">
        <header>
            <?php @include "./includes/header.php"; ?>
        </header>
        <main>
            <div class="container mainContent">
                <div class="flex rowWrap">
                    <div class="date">
                        <h3>03<span>|</span>12</h3>
                        <h3>2019</h3>
                        <h4><span>aalst</span></h4>
                    </div>
                    <div class="homeContent">
                        <h1>jobdag</h1>
                        <h2><span>webcreators</span></h2>
                        <p>Op 3 december 2019 organiseren de cursisten van Webcreators AALST een jobdag.</p>
                        <p>Bent u opzoek naar een nieuwe web developer of bent u dat in de nabije toekomst van plan? Dan is deze Jobdag de ideale gelegenheid om jouw nieuwe werknemer(s) te ontmoeten.</p>
                        <p>U kan zich inschrijven via het contactformulier, doe dit tijdig zodat uw plaats gereserveerd is.</p>
                        <p>Bij aanvang van de jobdag zijn er sandwiches en drankjes voorzien. En krijgt u een korte toespraak over het verder verloop van deze dag.</p>
                        <p>Kijk gerust al eens naar de profielen van onze <a href="./cursisten.php">cursisten</a>.</p>
                    </div>
                </div>
                <div class="registrationBtn">
                    <a href="./inschrijven.php" id="registrationHome"><span>inschrijven</span></a>
                </div>
            </div>
        </main>
        <footer>
            <?php @include "./includes/footer.php"; ?>
        </footer>
    </div>

    <script src="./sw.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>