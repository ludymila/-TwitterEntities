<?php

interface iSource
{
    public function setURL( $url );
    public function html( $data );

    public function getData();
    public function criteria( $item );
}
//INTERFACE iSource
