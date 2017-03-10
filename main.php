<?php
    header ('Content-type: text/html; charset=utf-8');

    date_default_timezone_set('America/Sao_Paulo');

    include 'Reader.class.php';

    include 'Twitter.class.php';
   // include 'Facebook.class.php';
   // include 'Wordpress.class.php';
    //include 'Statusblog.class.php';
    //include 'Flickr.class.php';
    include 'View.class.php';
    include 'Cache.class.php';


    $reader = new Reader();
    $view = new View();


    $twitter = new Twitter( $reader );
    $cache = new Cache( $twitter, $view );
    echo $cache->isCached( 'https://stream.twitter.com/1.1/statuses/sample.json', 'twitter-timeline.txt' );


  /*  $facebook = new Facebook( $reader );
    $cache = new Cache( $facebook, $view );
    echo $cache->isCached( 'https://graph.facebook.com/locaweb/posts&access_token=XXX&method=get', 'facebook-timeline.txt' );


    $wordpress = new WordPress( $reader );
    $cache = new Cache( $wordpress, $view );
    echo $cache->isCached( 'http://feeds.feedburner.com/bloglocaweb', 'rss_blog.txt' );


    /* cache status blog
    $statusblog = new Statusblog( $reader );
    $cache = new Cache( $statusblog, $view );
    echo $cache->isCached( 'http://statusblog.locaweb.com.br/feed', 'rss_statusblog.txt', 7 );   */
