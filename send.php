<?php
session_start();
ini_set("display_errors", "On");
date_default_timezone_set("Europe/Moscow");

$curl = curl_init();

if (!isset($_COOKIE["submitCount"])) {
  setcookie("submitCount", 0, time() + 3600);
}

$submitCount = $_COOKIE["submitCount"];

if ($submitCount > 1) {
  die("Вы уже отправили форму дважды");
} else {
  $submitCount++;
  setcookie("submitCount", $submitCount, time() + 3600);
}

curl_setopt_array($curl, [
  CURLOPT_URL => "https://saleup.spstudio.by/api/orders",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>
    "api_token=Z9JWE4FPAFfjs6rEFTB2tqyOTyxQ1TH9oo4zmOyh0BpcKuioyTfIuAojIEBL&order%5Bname%5D=" .
    $_POST["name"] .
    "&order%5Bphone%5D=" .
    $_POST["phone"] .
    "&order%5Bsource_id%5D=278&order%5Bcomment%5D=https%3A%2F%2Fsuchy-szampon.seilcandy.of.by&order%5Bproducts%5D%5B0%5D%5Boffer_id%5D=16630&order%5Bproducts%5D%5B0%5D%5Bprice%5D=24.99&order%5Bproducts%5D%5B0%5D%5Bquantity%5D=1",
  CURLOPT_HTTPHEADER => [
    ": ",
    "Content-Type: application/x-www-form-urlencoded",
  ],
]);

$response = curl_exec($curl);

curl_close($curl);

$thanks_file = "form-ok.php";

if (isset($_POST["phone"])) {
  try {
    $name = trim($_REQUEST["name"]);
    $phone = trim($_REQUEST["phone"]);
    $email = trim($_REQUEST["email"]);
    $comment = trim($_REQUEST["comment"]);
    $ip = $_SERVER["REMOTE_ADDR"];

    $site = $_SERVER["HTTP_HOST"] . dirname($_SERVER["REQUEST_URL"]);

    $from = ["noreply@" . $site];
    $to = file(__DIR__ . "/email.cnf");
    $to = array_map("trim", $to);
    $subject = "Новый заказ с сайта " . $site;
    $message =
      "Поступил новый заказ с сайта " .
      $site .
      ':
			<table>
				<tr>
					<td><b>Дата:</b></td>
					<td>' .
      date("d.m.Y H:i") .
      '</td>
				</tr>';
    if ($name != "") {
      $message .=
        '<tr>
					<td><b>Имя:</b></td>
					<td>' .
        $name .
        '</td>
				</tr>';
    }
    if ($phone != "") {
      $message .=
        '<tr>
					<td><b>Телефон:</b></td>
					<td>' .
        $phone .
        '</td>
				</tr>';
    }
    if ($email != "") {
      $message .=
        '<tr>
					<td><b>Email:</b></td>
					<td>' .
        $email .
        '</td>
				</tr>';
    }
    if ($comment != "") {
      $message .=
        '<tr>
					<td><b>Комментарий:</b></td>
					<td>' .
        $comment .
        '</td>
				</tr>';
    }
    if ($ip != "") {
      $message .=
        '<tr>
					<td><b>IP address:</b></td>
					<td>' .
        $ip .
        '</td>
				</tr>';
    }

    $message .= "</table>";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . implode(",", $from) . "\r\n";

    $result = mail(implode(",", $to), $subject, $message, $headers);

    if ($result) {
      header("Location: " . $thanks_file);
    } else {
      echo "Ошибка";
    }
  } catch (Exception $e) {
    echo "Ошибка";
  }
}
