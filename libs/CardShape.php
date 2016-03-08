<?php
namespace poker\libs;

class CardShape
{
	public static $HEARTS = 'hearts';
	public static $DIAMONDS = 'diamonds';
	public static $SPADES = 'spades';
	public static $CLUBS = 'clubs';

	public $shape;

	public function __construct($shape)
	{
		$this->shape = $shape;
	}
}