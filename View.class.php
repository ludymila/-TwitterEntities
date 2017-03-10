 <?php

class View
{


    public function draw( iSource $source, $limit=5 )
    {
        $data = $source->getData();

        $i = 0;
        $html = '';
        foreach( $data AS $item ){
            if( $i==$limit ) break;


            if( $source->criteria( $item ) ){
                $html .= $source->html( $item );
                $i++;
            }
        }
        return $html;
    }

}//View
