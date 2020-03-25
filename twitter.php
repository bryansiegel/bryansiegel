<?php 

require_once('gwitterAPIExchange.php');


$settings = array(
    'oauth_access_token' => "10948182-GlyqzahRjQ3NjiIGaNVYNwdsG8m7dkR6mb9t1XHay",
    'oauth_access_token_secret' => "oPUlYmUOX66s5sTwvInS7p5uSMDRs1uRQnoEHEMw2YlIx",
    'consumer_key' => "uZIaoQjS45GN5UPAyDHsg",
    'consumer_secret' => "GyrRgPgUBVL1EUiEwxFt2SQIDXRX5tzRo7ltpaUzA"
);

//https://api.twitter.com/1.1/statuses/user_timeline.json

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

$requestMethod = "GET";

$getfield = '?screen_name=bryansiegel&count=2';



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$twitter = new TwitterAPIExchange($settings);
// echo $twitter->setGetfield($getfield)
//              ->buildOauth($url, $requestMethod)
//              ->performRequest();

var_dump($twitter);

 ?>
</body>
</html>