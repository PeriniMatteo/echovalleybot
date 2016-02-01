<?php

$botToken = "96917727:AAHHlztO4oRfAu6XGIpq9ZYFGIvGhM1QuEg";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

$text = end($updateArray["result"])["message"]["text"];
$id = end($updateArray["result"])["message"]["from"]["id"];

print_r($text);
#print_r($id);

file_get_contents($website."/sendmessage?chat_id=".$id."&text=".$text)

?>
