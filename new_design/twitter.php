<?php 

// require_once('TwitterAPIExchange.php');


// $settings = array(
//     'oauth_access_token' => "10948182-GlyqzahRjQ3NjiIGaNVYNwdsG8m7dkR6mb9t1XHay",
//     'oauth_access_token_secret' => "oPUlYmUOX66s5sTwvInS7p5uSMDRs1uRQnoEHEMw2YlIx",
//     'consumer_key' => "uZIaoQjS45GN5UPAyDHsg",
//     'consumer_secret' => "GyrRgPgUBVL1EUiEwxFt2SQIDXRX5tzRo7ltpaUzA"
// );

// //https://api.twitter.com/1.1/statuses/user_timeline.json

// // $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

// $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

// $requestMethod = "GET";

// $getfield = '?screen_name=bryansiegel';


// $twitter = new TwitterAPIExchange($settings);
// echo $twitter->setGetfield($getfield)
//     ->buildOauth($url, $requestMethod)
//     ->performRequest();


require_once('src/twitter.class.php');


use DG\Twitter\Twitter;


$consumerKey = 'uZIaoQjS45GN5UPAyDHsg';
$consumerSecret = 'GyrRgPgUBVL1EUiEwxFt2SQIDXRX5tzRo7ltpaUzA';
$accessToken = '10948182-GlyqzahRjQ3NjiIGaNVYNwdsG8m7dkR6mb9t1XHay';
$accessTokenSecret = 'oPUlYmUOX66s5sTwvInS7p5uSMDRs1uRQnoEHEMw2YlIx';


$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);


$statuses = $twitter->load(Twitter::ME,3);

foreach ($statuses as $status) {
	// echo $status->created_at;
	// echo " ";
	// echo $status->text;
	// echo $status->url;
	// echo "<br />";

	// var_dump($status);

	$tweet_text = $status->text;
	$tweet_date = $status->created_at;

  $tweet_text=preg_replace('@(https?://([-\w\.]+)+(/([\w/_\.]*(\?\S+)?(#\S+)?)?)?)@', '<a href="$1" target="_blank">$1</a>', $tweet_text);





  echo $tweet_text;

$date = $tweet_date;
echo date("D M Y", strtotime($date));

echo  "<br />";


}


?>
