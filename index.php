<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Github Updates - rtCamp</title>
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
<form id="subform" class="newsletter-form" action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
    <input type="email" name="email" placeholder="Email address" />
    <button name="subscribe_btn">
        <span class="default">Subscribe</span>
        <span class="success">
            <svg viewBox="0 0 16 16">
                <polyline points="3.75 9 7 12 13 5"></polyline>
            </svg>Done
        </span>
        <svg class="trails" viewBox="0 0 33 64">
            <path d="M26,4 C28,13.3333333 29,22.6666667 29,32 C29,41.3333333 28,50.6666667 26,60"></path>
            <path d="M6,4 C8,13.3333333 9,22.6666667 9,32 C9,41.3333333 8,50.6666667 6,60"></path>
        </svg>
        <div class="plane">
            <div class="left"></div>
            <div class="right"></div>
        </div>
    </button>
</form>
<span class="message">
    
</span>

</body>
</html>