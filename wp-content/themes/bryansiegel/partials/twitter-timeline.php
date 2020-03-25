<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/src/Twitter/twitter.class.php');


use DG\Twitter\Twitter;




$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);


$statuses = $twitter->load(Twitter::ME, 2);
?>


<?php foreach ($statuses as $status) : ?>

	<?php
	//add href to links in tweet text
	$tweet_text = $status->text;
	$tweet_text = preg_replace('@(https?://([-\w\.]+)+(/([\w/_\.]*(\?\S+)?(#\S+)?)?)?)@', '<a href="$1" target="_blank">$1</a>', $tweet_text);

	// format date
	$tweet_date = date("D M", strtotime($status->created_at));
	?>
	<div class="card shadow">
		<div class="card-body">
			<div class="card-title">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/03/bryan-twitter.jpg" alt="" class="tweet-image">
				<div class="tweet-name-container">
					<span>Bryan Siegel</span>
					<small class="text-muted" style="text-align:left;">
						<a href="https://twitter.com/BryanSiegel">@bryansiegel</a>
					</small>
				</div>
				<div style="float:right;"><i class="fab fa-twitter"></i></div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<p class="card-text"><?php echo $tweet_text; ?></p>

		</div>
		<div class="card-footer">
			<small class="text-muted"><?php echo $tweet_date; ?></small>
		</div>
	</div>

<?php endforeach; ?>