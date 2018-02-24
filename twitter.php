<?php
use Abraham\TwitterOAuth\TwitterOAuth;

if(file_exists(__DIR__.'/.env')) {
    require 'vendor/autoload.php';
    $dotenv = new \Dotenv\Dotenv(__DIR__.'/');
    $dotenv->load();
}

$config = file_get_contents('config.json');
$config = json_decode($config);
$connection = new TwitterOAuth(getenv('CONSUMER_KEY'), getenv('CONSUMER_SECRET'));
$result = $connection->get("search/tweets", ["q" => $config->twitter_query, 'count' => 100]);
$users = [];
foreach ($result->statuses as $twitt) {
    $users[] = [
        'name' => $twitt->user->name
    ];
}
header('Content-Type: application/json');
$config->participantes = $users;
file_put_contents('config.json', json_encode($config));
echo json_encode($users);