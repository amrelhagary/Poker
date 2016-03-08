<?php

namespace poker\libs;


class CardColor
{
    public static $BLACK = 'black';
    public static $RED = 'red';

    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }
}