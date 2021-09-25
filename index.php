<?php include ("head.php") ?>
<body>
<?php include("navbar.php") ?>

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

foreach ($statuses as $tweet) {
  
         // Only the ones that have been favorited at least twice (the most popular ones).
         if ($tweet->favorite_count >= 3) {
             $status = $connection->get("statuses/oembed", ["id" => $tweet->id]);
             echo $status->html;
         }
    
    };

?>

<!-- <?php include("footer.php") ?> -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>-->
<!-- custom script -->
<script src="static/js/script.js"></script>
</body>
</html>