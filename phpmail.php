
<?php
//讀取 composer 所下載的套件
require_once('vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->CharSet = 'UTF-8';
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "mmmh61raw@gmail.com";
$mail->Password   = "zlcnbwoilzvdtuaq";

$mail->IsHTML(true);
$mail->AddAddress($_GET['email'], $_GET['name']);
$mail->SetFrom("RAW@gmail.com", "寄件者-RAW團隊");
// $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "RAW會員忘記密碼驗證信";
$content = "會員驗證: <a href='./localhost/yen8232235/change_password.php?email=" . $_GET['email']  .   "' target='_blank'>按我啟用</a>";
// $content = "會員驗證: <a href='http://localhost/raw/verify.php?verified_code=dae44e1a4b2cd0bc49b7f9fcc5cff556' target='_blank'>按我啟用</a>";
$mail->MsgHTML($content);

if ($mail->Send()) {
    echo "寄送成功";
} else {
    echo "寄送失敗";
    print_r($mail);
}
