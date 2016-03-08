<?php
namespace poker\libs;

class CardType
{
    public $type;

    public static $types = array(
        1,1,2,3,4,5,6,7,8,10,'king','queen','lady'
    );

    public function __construct($type)
    {
        $this->type = $type;
    }

}