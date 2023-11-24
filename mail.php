<?php

header("Content-Type: text/html;charset=utf-8");
mb_language('uni');
mb_internal_encoding("utf-8");

//【２】HTMLエンティティ変換
$inquiry = htmlspecialchars($_POST['inquiry'], ENT_QUOTES, "utf-8");
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, "utf-8");
$email = htmlspecialchars($_POST['mail'], ENT_QUOTES, "utf-8");
$phone = htmlspecialchars($_POST['tel'], ENT_QUOTES, "utf-8");
$message = htmlspecialchars($_POST['msg'], ENT_QUOTES, "utf-8");

$msg = mb_convert_kana($message, "sKV");

//管理者受信用メール送信処理
function funcManagerAddress($inquiry, $name, $email, $phone, $msg)
{

  //$mailto = 'info@qu-bic.jp'; // 管理者当てメール、カンマで複数設定可能
  $mailto = 'playsure.info@playsure.asics.com'; // 管理者当てメール、カンマで複数設定可能
  $subject = $name . "様。お問い合わせいただき、ありがとうございます。"; //件名




  $content = "内容を確認後、返信してください。\n\n";
  $content .= "--------------------------------\n\n";
  $content .= "【お問い合わせ内容】：" . $inquiry . "\n";
  $content .= "【お名前】：" . $name . "\n";
  $content .= "【メールアドレス】：" . $email . "\n";
  $content .= "【電話】：" . $phone . "\n";
  $content .= "【ご質問・ご相談】\n";
  $content .= $msg . "\n\n";
  $content .= "--------------------------------\n\n";

  $mailfrom = "From:" . mb_encode_mimeheader($name) . "<" . $email . ">";
  if (mb_send_mail($mailto, $subject, $content, $mailfrom) == true) {
    $managerFlag = "○";
  } else {
    $managerFlag = "×";
  }
  return $managerFlag;
}


//送信者用自動返信メール送信処理
function funcContactAddress($inquiry, $name, $email, $phone, $msg)
{
  $mailto = $email;
  $subject = "お問い合わせありがとうございます";
  $content = "\nお問い合わせありがとうございます。\n\n";

  $content .= "お問い合わせ内容を確認後、担当者よりご連絡させていただきます。\n\n\n";

  //$content .= "お問い合わせ内容を確認後、担当者よりご連絡させていただきます。\n\n\n";



  $content .= "以下の内容でお問い合わせを受け付けました。\n\n";
  $content .= "--------------------------------\n\n";
  $content .= "【お問い合わせ内容】：" . $inquiry . "\n";
  $content .= "【お名前】：" . $name . "\n";
  $content .= "【メールアドレス】：" . $email . "\n";
  $content .= "【電話】：" . $phone . "\n";
  $content .= "【ご質問・ご相談】\n";
  $content .= $msg . "\n\n";
  $content .= "--------------------------------\n\n\n";
  $content .= "容に誤りがあった場合には、お手数ですがこのメールにご返信ください。\n";
  $content .= "--------------------------------\n\n";
  $content .= "アシックス・プレイシュア株式会社\n"; //社名
  $content .= "東京都江東区新砂３丁目１番１８号 アシックス・ジャパン本社内\n";
  $content .= "playsure.info@playsure.asics.com\n\n";
  //$content .= "【営業時間】 (土日祝除く)\n\n";
  $content .= "--------------------------------\n";


  $mailfrom = "From:" . mb_encode_mimeheader("アシックス・プレイシュア株式会社") . "<'playsure.info@playsure.asics.com'>";

  if (mb_send_mail($mailto, $subject, $content, $mailfrom) == true) {
    $contactFlag = "○";
  } else {
    $contactFlag = "×";
  }
  return $contactFlag;
}


//送信者用自動返信メール送信
$contactAddress = funcContactAddress($inquiry, $name, $email, $phone, $msg);
//管理者受信用メール送信
$managerAddress = funcManagerAddress($inquiry, $name, $email, $phone, $msg);

if ($contactAddress === "○" && $managerAddress === "○") {
  header("Location: ./thanks.html");
}
