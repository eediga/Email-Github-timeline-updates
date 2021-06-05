<?php
if(!isset($_GET['email'])){
 header('Location: ./404.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsubscribe - Github Updates</title>
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/unsubscribe.css">
    <script src="https://kit.fontawesome.com/c3c845c2cd.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script type="module" src="./js/unsubscribe.js" defer></script>
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
<span class="message">
    We are sad to see you go!
</span>
<button class="button">
    <div class="trash">
        <div class="top">
            <div class="paper"></div>
        </div>
        <div class="box"></div>
        <div class="check">
            <svg viewBox="0 0 8 6">
                <polyline points="1 3.4 2.71428571 5 7 1"></polyline>
            </svg>
        </div>
    </div>
    <span>Unsubscribe</span>
</button>

</body>
</html>