<?php

// Import the TwitterOAuth class...
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// Store keys and tokens in vars
$consumerKey = "";
$consumerSecret = "";
$accessToken = "";
$accessTokenSecret = "";

// Start making API requests...
$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
$content = $connection->get("account/verify_credentials");

// GET tweet timelines via TwitterOAuth...
$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);

// print_r($statuses);

?>

<aside><?php foreach ($statuses as $tweet) {
  
         // Only the ones that have been favorited at least twice (the most popular ones).
         if ($tweet->favorite_count >= 3) {
             $status = $connection->get("statuses/oembed", ["id" => $tweet->id]);
             echo $status->html;
         }
    
    };

?></aside>