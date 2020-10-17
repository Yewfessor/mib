<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>M.I.B.</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Login</title>
</head>

<body>

    <div>
        <div>
            <div>
                <form name="login" method="post" action="assets/php/session_login.php" autocomplete="off">
                    <span>MIB Controler</span>
                    <div>
                        <input type="text" id="account_username" required name="account_username"
                            placeholder="Username">
                    </div>
                    <div>
                        <input type="password" id="account_password" required name="account_password"
                            placeholder="Password">
                    </div>
                    <div>
                        <input type="submit" value="Login" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>