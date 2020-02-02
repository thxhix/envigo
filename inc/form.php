
<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['username'];
$tg = $_POST['usertg'];
$promo = $_POST['promo'];

//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "930659920:AAHNuRj-7NmAk8t1-7FVZ6HvOGocF1aH0t8";

//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-312202398";

//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
	'Имя пользователя: ' => $name,
	'Telegram: ' => $tg,
	'Промокод:' => $promo,
);

//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
	$txt .= "<b>".$key."</b> ".$value."%0A";
};

//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


?>