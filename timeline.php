<?php
    function curl_file($url, $timeout=0){
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        //curl_setopt ($ch, CURLOPT_HEADER, 1);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
        $content = curl_exec( $ch );
        curl_close( $ch );

        return $content;
    }
    $url = "http://twitter.com/UfamNER";
    $xml = new SimpleXMLElement( curl_file( $url ) );

    $item = $xml->channel->item;
    var_dump( $item );
?>
