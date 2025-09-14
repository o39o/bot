<?php

$token = "7266912093:AAHW4AfCweGn-tmd4jmkG3g8fAwKe0xTZZw"; // ضع توكن البوت الخاص بك هنا

// استقبل التحديث من Telegram
$update = json_decode(file_get_contents("php://input"), true);

// تحقق من وجود رسالة
if (isset($update["message"])) {
    $chat_id = $update["message"]["chat"]["id"];
    $text = $update["message"]["text"];

    // رد بسيط على الرسالة
    $reply = "أهلاً! لقد أرسلت: " . $text;

    // إرسال الرد عبر API
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($reply));
}

?>
