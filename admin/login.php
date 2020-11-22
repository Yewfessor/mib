<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>M.I.B.</title>
    <link rel="stylesheet" href="../assets/css/login.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Login</title>
</head>

<body>

    <div class="login-container">
        <div class="login-box">
            <form name="login" method="post" action="./models/accountmodel/session_login.php" autocomplete="off" class="login-form">
                <div class="logo-container">
                    <img src="../assets/images/Logo/mib-logo-icon-white.png" alt="" class="logo">
                </div>
                <h1 class="heading">MIB Controller</h1>
                <div class="input">
                    <input type="text" id="user_username" required name="user_username" placeholder="Username" autofocus>
                    <input type="password" id="user_password" required name="user_password" placeholder="Password">
                </div>

                <input type="submit" value="Login" class="submit-btn"/>

            </form>
        </div>
    </div>

    <footer>
        <p class="contact">Contact Support: 091-234-5678</p>
    </footer>



</body>

</html>