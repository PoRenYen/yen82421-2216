<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更改密碼</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/css-yen/login_yen.css">

</head>

<body>
    <?php require_once 'tpl/head.inc.php' ?>

    <!-- content -->

    <div class="tabs-container">
        <div class="change_pasword_h_box">
            <h1 class="change_pasword_h">更改密碼</h1>
        </div>

        <div class="loginbox">
            <div class="singUpinput_box">
                <p class="singUp_input_p" id="change_password_singUp_input_p">密碼</p>
            </div>
            <div class="passwordbox" style="margin-bottom: 32px;">
                <input type="password" class="codeinputwrap" value="" id="myInput" placeholder="輸入密碼">
                <div class="open_eye">
                    <input type="image" onclick="myFunction()" src="./svg/eye-off.svg" id="password_open_eye_svg">
                </div>
            </div>
        </div>

        <div class="loginbox">
            <div class="singUpinput_box">
                <p class="singUp_input_p" id="change_password_singUp_input_p">密碼</p>
            </div>
            <div class="passwordbox" style="margin-bottom: 32px;">
                <input type="password" class="codeinputwrap" value="" id="myInput2" placeholder="再次輸入密碼">
                <div class="open_eye">
                    <input type="image" onclick="myFunction2()" src="./svg/eye-off.svg" id="password_open_eye_svg2">
                </div>
            </div>
        </div>

        <div class="loginbox_btn">

            <!-- <a class="login_btn" href="./singup_login_switch.php" id="change_password_sure_btn">確定</a> -->
            <button class="login_btn" type="submit" id="change_password_btn_sure" href="./singup_login_switch.php">確定</button>
        </div>

    </div>

    <?php require_once 'tpl/foot.inc.php' ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/js-yen/singup_login.js"></script>
    <script src="https://kit.fontawesome.com/f56e5ae7a8.js" crossorigin="anonymous"></script>


    <script>
        $('#change_password_btn_sure').click(function() {
            event.preventDefault();
            console.log('hi');


            // $.get("./phpmail.php", function(data) {
            //     alert("Load was performed.");
            // });


            $.post("./change_password_api.php", {
                    email: "hohoho@raw.com",
                    password: '5678'
                })
                .done(function(data) {
                    alert("Data Loaded: " + JSON.stringify(data));
                });
        })
    </script>

</body>

</html>