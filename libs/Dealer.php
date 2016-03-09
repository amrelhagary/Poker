<?php
namespace poker\libs;

class Dealer
{
	private $deck;

	public function __construct(CardDeck $deck)
	{
		$this->deck = $deck;
	}

	public function hand()
	{
		$cards = $this->deck->getCards();
		shuffle($cards);
		// return 5 cards
		return array_slice($cards,0,5);
	}
}