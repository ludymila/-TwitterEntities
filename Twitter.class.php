<?php

include_once 'iSource.class.php';
/**

    $twitter = new Twitter( $reader );
    $twitter->setURL( 'http://twitter.com/statuses/user_timeline/locaweb.json?count=5' );
    echo $view->draw( $twitter );

 */
class Twitter implements iSource
{

    private $reader;
    private $url;

    public function __construct( Reader $reader )
    {
        $this->reader = $reader;
    }

    public function setURL( $url )
    {
        $this->url = $url;
    }


    /**
     * @function html
     */
    public function html( $item )
    {
        $html = "\t".'<li><img src="'.$item->user->profile_image_url.'" alt="'.$item->user->screen_name.'" title="'.$item->user->screen_name.'" /> ';

        $html .= $this->makeLinks( $item->text );
        $html .= '</li>'.PHP_EOL;


        return $html;
    }


    /**
     * @function getData
     */
    public function getData()
    {
        return $this->reader->getJSON( $this->url );
    }


    /**
     * @function criteria
     */
    public function criteria( $item )
    {
        return true;
    }


    /**
     * @function makeLinks
     */
    private function makeLinks( $text )
    {
        return preg_replace(
            Array(
                '/(http:\/\/[\w\.\/]+)/',
                '/[^\w]@([\w]+)/',
                '/(#[\w]+)/'
            ),
            Array(
                '<a href="$1" title="$1" rel="external">$1</a>',
                '<a href="http://twitter.com/#!/$1" title="$1" rel="external">@$1</a>',
                '<a href="http://twitter.com/#!/search/$1" title="$1" rel="external">$1</a>'
            ),
            $text
        );
    }


}//Twitter
