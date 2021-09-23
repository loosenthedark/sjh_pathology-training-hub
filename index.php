<!-- <?php include ("head.php") ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom stylesheet -->
    <!-- <link rel="stylesheet" href="./style.css"> -->

    <title>SJH Pathology | Training Hub</title>
</head>

<body>
  <?php
        
      echo"<script type='text/javascript' src='config.js'></script><script type='text/javascript'>
        const consumerKey = config.CONSUMER_KEY;
        const consumerSecret = config.CONSUMER_SECRET;
        const accessToken = config.access_token;
        const accessTokenSecret = config.access_token_secret;</script>";
    
      // Import the TwitterOAuth class...
      require "twitteroauth/autoload.php";
      use Abraham\TwitterOAuth\TwitterOAuth;
    
      // Start making API requests...
      $connection = new TwitterOAuth(consumerKey, consumerSecret, accessToken, accessTokenSecret);
      $content = $connection->get("account/verify_credentials");
    
      // POST tweets via TwitterOAuth...
      // $statuses = $connection->post("statuses/update", ["status" => "What, menino, WHAAAAATTT???"]);
    
      // GET tweet timelines via TwitterOAuth...
      $statuses = $connection->get("statuses/home_timeline", ["count" => 100, "exclude_replies" => true]);
    
      // print_r($statuses);
    
      foreach ($statuses as $tweet) {
        
              $status = $connection->get("statuses/oembed", ["id" => $tweet->id]);
                  echo $status->html;
          
          };
    
    ?>
  <!-- <div class="container-fluid pt-5 px-lg-5">
    <div class="container pt-md-5 px-lg-5">
      <h1 class="master-planner-heading mb-3 text-center">Master Planner</h1>
      <p class="text-center text-white px-md-4 px-lg-5 mx-md-5 mx-lg-auto">Whether you're brainstorming for a small project or plotting world domination, Master Planner can help you keep your ideas organised, updated and securely stored.</p>
      <div id="form-signup-wrapper">
        <p class="text-center text-success mb-4">Interested? Then sign up today!</p>
        <div class="error"><?php if($_POST["sign_up"] == "1" and $error_email != "" or $error_password != "" or $error_taken != "" or $error_problem != "") { echo '<div class="alert alert-danger alert-dismissible fade show pr-5 mx-auto" role="alert">
          <p class="text-center mb-2"><strong>There was an error(s) in your form:</strong></p><ul class="ml-md-3 mb-1">'.$error_email.$error_password.$error_taken.$error_problem.'</ul> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>'; } ?></div>
        <form id="form-signup" method="POST">
          <div class="form-group mx-auto">
            <input class="form-control" type="email" name="email" placeholder="Email address">
          </div>
          <div class="form-group mx-auto">
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group form-check mx-auto text-center">
            <input type="checkbox" class="form-check-input" id="signup-checkbox" name="stay_logged_in" value="1">
            <label class="form-check-label text-white" for="signup-checkbox">Stay logged in?</label>
          </div>
          <input type="hidden" name="sign_up" value="1">
          <div class="form-group mx-auto mb-0 text-center">
            <input type="submit" class="btn btn-success px-3 py-2 mr-1" name="submit" value="Sign Up!">
            <a id="show-form-login" class="px-3 py-2 btn btn-outline-secondary show-other-form">Log In</a>
          </div>
        </form>
      </div>
      <div id="form-login-wrapper">
        <p class="text-center text-primary mb-4">Already signed up? Then log in below...</p>
        <div class="error" id="error-invalid"><?php if($error_invalid != "") { echo '<div class="alert alert-danger alert-dismissible fade show pr-5 mx-auto" role="alert">
          <p class="text-center mb-1"><strong>'.$error_invalid.'</strong></p> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div><script>$("#form-login-wrapper").toggle();
                    $("#form-signup-wrapper").toggle();</script>'; } ?></div>
        <form id="form-login" method="POST">
          <div class="form-group mx-auto">
            <input class="form-control" type="email" name="email" placeholder="Email address" required>
          </div>
          <div class="form-group mx-auto">
            <input class="form-control" type="password" name="password" placeholder="Password" required>
          </div>
          <div class="form-group form-check mx-auto text-center">
            <input type="checkbox" class="form-check-input" id="login-checkbox" name="stay_logged_in" value="1">
            <label class="form-check-label text-white" for="login-checkbox">Stay logged in?</label>
          </div>
          <input type="hidden" name="sign_up" value="0">
          <div class="form-group mx-auto mb-0 text-center">
            <input type="submit" class="btn btn-primary px-3 py-2 mr-1" name="submit" value="Log In!">
            <a id="show-form-signup" class="px-3 py-2 btn btn-outline-secondary show-other-form">Sign Up</a>
          </div>
        </form>
      </div>
    </div>
  </div> -->
  <!-- <?php include("footer.php") ?> -->
</body>
</html>