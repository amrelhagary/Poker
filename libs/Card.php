<?php
namespace poker\libs;

use poker\libs\CardType;
use poker\libs\CardShape;
use poker\libs\CardColor;


class Card
{
	private $type;
	private $shape;
    private $color;

	public function __construct(CardType $type,CardShape $shape,CardColor $color){
		$this->type = $type;
		$this->shape = $shape;
        $this->color = $color;
	}

	/**
	 * @return \poker\libs\CardType
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param \poker\libs\CardType $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	/**
	 * @return \poker\libs\CardShape
	 */
	public function getShape()
	{
		return $this->shape;
	}

	/**
	 * @param \poker\libs\CardShape $shape
	 */
	public function setShape($shape)
	{
		$this->shape = $shape;
	}

	/**
	 * @return \poker\libs\CardColor
	 */
	public function getColor()
	{
		return $this->color;
	}

	/**
	 * @param \poker\libs\CardColor $color
	 */
	public function setColor($color)
	{
		$this->color = $color;
	}

	public function compareTo(Card $card)
	{
		if($this->type === $card->getType())
		{
			return true;
		}else{
			return false;
		}
	}

	public static function printCard($cards)
	{

		if(is_array($cards))
		{
			$i = 1;
			foreach($cards as $card)
			{
				if($card instanceof  Card)
					printf(" Card[%d] = %s , %s | \n",$i,$card->getType()->type,$card->getShape()->shape);

			++$i;
			}


		}else{
			if($cards instanceof  Card)
				printf(" Card = %s | %s \n",$cards->getType()->type,$cards->getShape()->shape);
		}
	}
}