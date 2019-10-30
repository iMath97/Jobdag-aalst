<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Bent u op zoek naar nieuwe getalenteerde webdevelopers? Schrijf u dan nu in op deze pagina en maak kennis met 18 Junior Webdevelopers.">

    <title>inschrijven | jobdag webcreators aalst</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./img/favicon/site.webmanifest">

    <script src="https://kit.fontawesome.com/1df4c08b07.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Rajdhani|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
    <div class="bg flex col jcSb aiCenter">
        <header>
            <?php @include "./includes/header.php"; ?>
        </header>
        <main>
            <div class="container mainContent">
                <div class="flex col aiCenter">
                    <h1 class="marginBottom">inschrijven</h1>
                    <form action="admin/includes/registerCompany.php" method="POST" class="flex jcCenter col">
                        <label for="company">bedrijfsnaam</label>
                        <input type="text" id="company" name="company" required>
                        <label for="adres">adres</label>
                        <input type="text" id="adres" name="adres" required>
                        <label for="contact">contact persoon</label>
                        <input type="text" id="contact" name="contact" required>
                        <label for="phone">tel</label>
                        <input type="number" id="phone" name="phone">
                        <label for="email">email</label>
                        <input type="email" id="email" name="email" required>
                        <label for="companyURL">bedrijfs URL</label>
                        <input type="text" id="companyURL" name="companyURL" required>
                        <label for="attendees">aantal aanwezigen</label>
                        <input type="number" id="attendees" name="attendees" required>
                        <label for="prive" id="labelCenter" class="flex jcCenter">
                            <input type="checkbox" name="privacy" value="privacy" id="prive">
                            <a href="./includes/privacy.php" id="privacy" target="_blank">privacy</a>
                        </label>
                        <input type="submit" name="send" value="Schrijf je in">
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <?php @include "./includes/footer.php"; ?>
        </footer>
    </div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151204448-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151204448-1');
</script>

    <script src="./js/script.js"></script>
</body>
</html>