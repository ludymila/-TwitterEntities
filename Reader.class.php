<?php

class Reader
{


    public function getXML( $url )
    {
        $file = $this->curlFile( $url );
        return simplexml_load_string( $file, 'SimpleXMLElement', LIBXML_NOCDATA );
    }
    public function getJSON( $url )
    {
        $result = $this->curlFile( $url );
        return json_decode( $result );
    }

    private function getContents( $url )
    {
        return file_get_contents( $url );
    }

    private function curlFile($url, $timeout=0)
    {
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        //curl_setopt ($ch, CURLOPT_HEADER, 1);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
        $content = curl_exec( $ch );
        curl_close( $ch );

        return $content;
    }
}//Reader
