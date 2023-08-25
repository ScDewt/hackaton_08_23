<?php


// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key = 'your:bot_api_key';
$bot_username = 'username_bot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    $telegram->addCommandsPath(__DIR__.'/src/Commands/');

    // Handle telegram webhook request
    $telegram->handle();


} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
     echo $e->getMessage();
}