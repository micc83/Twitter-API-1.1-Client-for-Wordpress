Twitter API 1.1 Client for Wordpress
====================================

A simple class to query Twitter API v1.1 from WordPress with caching. 

## Documentation

As first go to https://dev.twitter.com/apps, create an application and get both **consumer_key** and **consumer_secret**.
After that just include **class-wp-twitter-api.php** in your plugin or theme folder.
That's it, check the following example, to understand how Wp_Twitter_Api works.

### Example

```php
<?php

// Include Twitter API Client
require_once( 'class-wp-twitter-api.php' );

// Set your personal data retrieved at https://dev.twitter.com/apps
$credentials = array(
  'consumer_key' => 'xxxxxxxxxxxxxxxx',
  'consumer_secret' => 'xxxxxxxxxxxxxxxx'
);

// Let's instantiate Wp_Twitter_Api with your credentials
$twitter_api = new Wp_Twitter_Api( $credentials );

// Example a - Retrieve last 5 tweets from my timeline (default type statuses/user_timeline)
$query = 'count=5&include_entities=true&include_rts=true&screen_name=micc1983';
var_dump( $twitter_api->query( $query ) );

// Example b - Retrieve my follower with a cache of 24 hour (default 30 minutes)
$query = 'screen_name=micc1983';
$args = array(
  'type' => 'users/show',
  'cache' => ( 24 * 60 * 60 )
);
$result = $twitter_api->query( $query, $args );
echo $result->followers_count;
```
For a full list of Twitter API 1.1 resources check here: https://dev.twitter.com/docs/api/1.1 while for testing you can take advantage of Twitter API Console here: https://dev.twitter.com/console

## Support and contacts

If you need support you can find me on [twitter](https://twitter.com/Micc1983) or comment on the dedicated page on my [website](http://codeb.it/come-accedere-alle-nuove-api-1-1-di-twitter-con-wordpress/).
