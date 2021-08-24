<?php
require_once 'db.inc.php'
?>
<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入註冊</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/css-yen/login_yen.css">
    <script src="https://kit.fontawesome.com/f56e5ae7a8.js" crossorigin="anonymous"></script>

    <style>
        #login_hiddenbutton {
            height: 300px;
            position: absolute;
            left: 120%;
            top: 2%;
        }

        #register_hiddenbutton {
            width: 400px;
            height: 400px;
            margin-top: -7%;
            background: no-repeat center/100% url(./img/registerpic.png);
            position: absolute;
            left: 120%;
            top: 2%;
        }
    </style>
</head>

<body>
    <?php require_once 'tpl/head.inc.php' ?>
    <!-- content -->

    <div class="tabs-container">
        <div class="tabs-pages">
            <div class="tab active">登入</div>
            <div class="tab" id="tab_right">註冊</div>
        </div>

        <div class="tabs-contents">
            <div class="tab-c active">
                <div class="inner-content">
                    <div class="yen-row">
                        <div class="loginbox">
                            <div class="singUp_input_box" id="singUp_input">
                                <p class="singUp_input_p">信箱</p>
                            </div>
                            <div class="passwordbox">
                                <input type="text" class="mailinputwrap" placeholder="請輸入信箱" id="mailtext">
                            </div>
                        </div>

                        <div class="loginbox">
                            <div class="singUpinput_box">
                                <p class="singUp_input_p">密碼</p>
                            </div>
                            <div class="passwordbox" style="margin-bottom: 32px;">
                                <input type="password" class="codeinputwrap" value="" id="myInput" placeholder="輸入密碼">
                                <div class="open_eye">
                                    <input type="image" onclick="myFunction()" src="./svg/eye-off.svg" id="password_open_eye_svg">
                                </div>
                            </div>
                        </div>

                        <div class="loginbox_btn">

                            <a class="login_btn" href="#">登入</a>
                            <a class="login_btn" href="./forget_password.php" id="singUp_forget_password_btn">忘記密碼</a>

                        </div>
                    </div>
                </div>

                <!-- set post as a hidden button -->

                <button>
                    <img src="./img/loginpic.png" id="login_hiddenbutton" alt="">
                </button>

                <!--                             -->

            </div>



            <div class="tab-c">
                <div class="inner-content">
                    <div class="yen-row">
                        <div class="loginbox">
                            <div class="loginIn_input_box">
                                <p class="loginIn_input_p">信箱</p>
                            </div>
                            <div class="passwordbox">
                                <input type="email" class="mailinputwrap" placeholder="請輸入信箱" id="email">
                            </div>
                        </div>

                        <div class="loginbox">
                            <div class="singUpinput_box">
                                <p class="singUp_input_p">密碼</p>
                            </div>
                            <div class="passwordbox" style="margin-bottom: 32px;">
                                <input type="password" class="codeinputwrap" value="" id="myInput2" placeholder="輸入密碼">
                                <div class="open_eye">
                                    <input type="image" onclick="myFunction2()" src="./svg/eye-off.svg" id="password_open_eye_svg2">
                                </div>
                            </div>
                        </div>

                        <div class="loginbox">
                            <div class="singUpinput_box">
                                <p class="singUp_input_p">密碼</p>
                            </div>
                            <div class="passwordbox" style="margin-bottom: 32px;">
                                <input type="password" class="codeinputwrap" value="" id="myInput3" placeholder="再次輸入密碼">
                                <div class="open_eye">
                                    <input type="image" onclick="myFunction3()" src="./svg/eye-off.svg" id="password_open_eye_svg3">
                                </div>
                            </div>
                        </div>

                        <div class="radiobox">
                            <input id="radio-agree" class="radio-custom" name="coupon-pay_group" type="checkbox">
                            <label for="radio" class="radio-custom-label ml_18-forRadioOfSingUP mt_32-forRadioOfSingUP">
                                <p>我同意赤著服務條款及隱私政策</p>
                            </label>

                            <input id="radio-agree" class="radio-custom" name=" coupon-pay_group" type="checkbox">
                            <label for="radio" class="radio-custom-label ml_18-forRadioOfSingUP mt_32-forRadioOfSingUP">
                                <p>訂閱赤著每月電子報</p>
                            </label>
                        </div>

                        <div class="loginbox_btn yen_justify-center">

                            <!-- <a class="login_btn" href="#">確定</a> -->

                            <button class="login_btn" type="submit" id="btn_sure">確定</button>

                        </div>
                    </div>
                </div>

                <!-- set post as a hidden button -->

                <div id="register_hiddenbutton"></div>

                <!--                             -->

            </div>
        </div>
    </div>

    <?php require_once 'tpl/foot.inc.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/js-yen/singup_login.js"></script>
</body>

</html>