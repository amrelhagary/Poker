<?php
namespace poker\libs;

class Dealer
{
	private $dick;

	public function __construct(CardDick $dick)
	{
		$this->dick = $dick;
	}

	public function hand()
	{
		$cards = $this->dick->getCards();
		shuffle($cards);
		// return 5 cards
		return array_slice($cards,0,5);
	}
}