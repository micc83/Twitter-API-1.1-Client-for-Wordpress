<?php 

// Include Twitter API Client
require_once( 'class-wp-twitter-api.php' );

// Set your personal data retrieved at https://dev.twitter.com/apps
$credentials = array(
  'consumer_key'    =>  'xxxxxxxxxxxxxxxx',
  'consumer_secret' =>  'xxxxxxxxxxxxxxxx
);

// Let's instantiate our class with our credentials
$twitter_api = new Wp_Twitter_Api( $credentials );

// Example a - Retrieve last 5 tweets from my timeline (default type)
$query = 'count=5&include_entities=true&include_rts=true&screen_name=micc1983';
var_dump( $twitter_api->query( $query );

// Example b - Retrieve my follower with a cache of 24 hour
$query = 'screen_name=micc1983';
$args = array(
  'type' => 'users/show.json',
  'cache' => ( 24 * 60 * 60 )
);
$result = $twitter_api->query( $query, $args );
echo $result->followers_count;
