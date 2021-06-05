<?php
include('../resources/db-conf.php');

if(isset($_GET['token'])){
    $token = $_GET['token'];
    $message_dom = "document.querySelector('.message')";
    $done_dom = "document.querySelector('div.done')";

    echo "<script>console.log('$token')</script>";
    $verify_query = "SELECT * FROM sublist WHERE verify_token='$token' LIMIT 1";
    $verify_query_run = mysqli_query($con, $verify_query);

    if(mysqli_num_rows($verify_query_run) > 0){
        $row = mysqli_fetch_array($verify_query_run);
        if($row['verified'] == "0"){
            echo "<script>console.log('Verifying...')</script>";
            $update_query = "UPDATE sublist SET verified='1' WHERE verify_token='$token'";
            $update_query_run = mysqli_query($con, $update_query);
            if($update_query_run){
                // Successful
                echo "
                <div class='done'></div>
                <span class='message'>Hurray! Your email has been verified.</span>
                ";
            }
            else{
                // Failed verification
                echo "
                <div class='emoji  emoji--sad'>
                    <div class='emoji__face'>
                        <div class='emoji__eyebrows'></div>
                        <div class='emoji__eyes'></div>
                        <div class='emoji__mouth'></div>
                    </div>
                </div>
                <span class='message'>Oops! Verification failed</span>";
            }
        }
        else{
            // Already verified
            echo "
            <div class='notification'>
                <svg viewbox='-10 0 35 35'>
                <path class='notification--bell' d='M14 12v1H0v-1l0.73-0.58c0.77-0.77 0.81-3.55 1.19-4.42 0.77-3.77 4.08-5 4.08-5 0-0.55 0.45-1 1-1s1 0.45 1 1c0 0 3.39 1.23 4.16 5 0.38 1.88 0.42 3.66 1.19 4.42l0.66 0.58z'></path> 
                <path class='notification--bellClapper' d='M7 15.7c1.11 0 2-0.89 2-2H5c0 1.11 0.89 2 2 2z'></path>
                </svg>
                <span class='notification--num'>i</span>
            </div>
            <span class='message'>Looks like you are already verified!</span>
            ";
        }
    }
    else{
        // Error message
        echo "
                <div class='emoji  emoji--sad'>
                    <div class='emoji__face'>
                        <div class='emoji__eyebrows'></div>
                        <div class='emoji__eyes'></div>
                        <div class='emoji__mouth'></div>
                    </div>
                </div>
                <span class='message'>Oops! Verification failed</span>";
    }
}
else{
    header("Location: ./404.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Mail - Github Updates</title>
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/success.css">
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
</body>
</html>