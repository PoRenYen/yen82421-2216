//  登入/註冊切換
$(".tab").each(function (index) {
    $(this).click(function (e) {
        triggletab();
        triigletabcontent();
        $(this).toggleClass("active");
        $(".tab-c")
            .eq(index)
            .toggleClass("active");
    });
});
//to remove all tab headers
function triggletab() {
    $(".tab").each(function () {
        $(this).removeClass("active");
    });
}

//triggle the tab content
function triigletabcontent() {
    $(".tab-c").each(function () {
        $(this).removeClass("active");
    });
}


// 密碼欄 明碼(睜眼)/暗碼(閉眼)
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }

    var a = document.getElementById("password_open_eye_svg");
    if (a.src.endsWith('eye.svg') == true)  //Comparison
    {
        a.src = "./svg/eye-off.svg"; //assignment  

    } else if (a.src.endsWith('eye-off.svg') == true) {
        a.src = "./svg/eye.svg";

    }
}
function myFunction2() {
    var y = document.getElementById("myInput2");
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }

    var b = document.getElementById("password_open_eye_svg2");
    if (b.src.endsWith('eye.svg') == true)  //Comparison
    {
        b.src = "./svg/eye-off.svg"; //assignment  

    } else if (b.src.endsWith('eye-off.svg') == true) {
        b.src = "./svg/eye.svg";

    }
}
function myFunction3() {
    var z = document.getElementById("myInput3");
    if (z.type === "password") {
        z.type = "text";
    } else {
        z.type = "password";
    }

    var c = document.getElementById("password_open_eye_svg3");
    if (c.src.endsWith('eye.svg') == true)  //Comparison
    {
        c.src = "./svg/eye-off.svg"; //assignment  

    } else if (c.src.endsWith('eye-off.svg') == true) {
        c.src = "./svg/eye.svg";

    }
}

// 註冊
$('button#btn_sure').click(function (event) {

    event.preventDefault();

    let input_email = $('input#email');
    let input_password = $('input#myInput2');

    alert(input_email.val());
    alert(input_password.val());

    let objUser = {
        email: input_email.val(),
        password: input_myInput2.val()
    };

    $.post("insertUser.php", objUser, function (obj) {

        if (obj['success']) {

            alert('註冊成功');
            setTimeout(function () {
                location.href('home.php');
            }, 1000);

        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);

    }, 'html');
    // 等正確後再把html改回json

});

//  隱藏快速輸入 （設定在吉祥物圖）

$('#login_hiddenbutton').click(function () {
    console.log('success');
    $('#mailtext').val('aaa@raw.com');
    $('#myInput').val('aaaa1234');
})

// 跳轉
// $.post("login.php", objUser, function (obj) {
//     if (obj['success']) {

//         alert('登入成功');
//         setTimeout(function () {
//             location.reload();
//         }, 3000);
//     } else {
//         alert(`${obj['info']}`);
//     }
//     console.log(obj);
// }, 'json');

//登入

$('button#btn_login').click(function (event) {
    console.log("hi");
    event.preventDefault();

    let input_email = $('input#email_login');
    let input_password = $('input#myInput');

    // alert(input_email.val());
    // alert(input_password.val());

    let objUser = {
        email: input_email.val(),
        password: input_password.val()
    };
    $.post("login.php", objUser, function (obj) {
        if (obj['success']) {
            //成功訊息
            alert('登入成功');

        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json')
});