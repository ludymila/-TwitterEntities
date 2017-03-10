<?php

class Cache
{
    private $path = '../cache/';
    private $view;

    public function setPath( $path )
    {
        $this->path = $path;
    }

    public function __construct( iSource $source, View $view )
    {
        $this->source = $source;
        $this->view = $view;
    }

    public function isCached( $url, $file, $limit=5 )
    {
        $this->source->setURL( $url );
        $cached_file = $this->path.$file;


        if( is_file( $cached_file ) )
            return file_get_contents( $cached_file );

        $contents = $this->view->draw( $this->source, $limit );

        file_put_contents( $cached_file, trim( $contents ) );
        return $contents;
    }


}//Cache
