<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Heb je een vraag of opmerking? Contacteer ons dan snel en we doen ons best zo snel mogelijk u te antwoorden.">

    <title>contact | jobdag webcreators aalst</title>
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
                    <h1 class="marginBottom">contact</h1>
                    <form action="./includes/contactPHP.php" method="POST" class="flex jcCenter col">
                        <label for="subject">onderwerp</label>
                        <input type="text" id="subject" name="subject" required>
                        <label for="name">naam</label>
                        <input type="text" id="name" name="name" required>
                        <label for="email">email</label>
                        <input type="email" id="email" name="email" required>
                        <label for="message">uw boodschap</label>
                        <textarea name="message"cols="30" rows="10" id="message" required></textarea>
                        <input type="submit" name="submit" value="Verstuur">
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
