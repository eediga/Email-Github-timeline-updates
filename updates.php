<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updates - Github Updates</title>
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <script src="https://kit.fontawesome.com/c3c845c2cd.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script type="module" src="./js/core.js" defer ></script>
</head>
<body>
    <header>
        <span id="title">
            Github Email Updates <i class="fab fa-github-alt"></i>
        </span>
        <span id="description">
            Keep a track of the Github Timeline. Receive email updates every 5 minutes.
        </span>
    </header>
    <div class="updates">
    <?php
        include('../resources/templates/history.html');
    ?>
    </div>
</body>
</html>

