<?php
namespace poker\libs;
class Player
{

	private $dealer;
	private $cards;
	private $winCards;
	public function __construct(Dealer $dealer)
	{
		$this->dealer = $dealer;
	}

	public function withdraw()
	{
		// ask dealer to hand cards
		$this->cards = $this->dealer->hand();
	}

	public function isWin(){
		//check cards if i have 2 have the sample type

		/**
		 * for test
		 */
//		$testCards = array(
//			new Card(new CardType(1),new CardShape(CardShape::$CLUBS),new CardColor(CardColor::$BLACK)),
//			new Card(new CardType(1),new CardShape(CardShape::$SPADES),new CardColor(CardColor::$BLACK)),
//			new Card(new CardType(2),new CardShape(CardShape::$DIAMONDS),new CardColor(CardColor::$RED)),
//			new Card(new CardType(10),new CardShape(CardShape::$CLUBS),new CardColor(CardColor::$BLACK)),
//			new Card(new CardType(9),new CardShape(CardShape::$DIAMONDS),new CardColor(CardColor::$BLACK))
//		);
//		$this->cards = $testCards;


		$newCards = array();
		for($i = 0 ; $i < sizeof($this->cards); $i++)
		{
			$c1 = $this->cards[$i];
			for($j = $i+1 ; $j < sizeof($this->cards) ; $j++)
			{
				$c2 = $this->cards[$j];
				if($c1 instanceof Card && $c2 instanceof Card)
				{
					// the same type
					if($c1->getType()->type === $c2->getType()->type)
					{
						$newCards = array($c1,$c2);
						break;
					}
				}


			}

		}
		$this->winCards = $newCards;
		if(sizeof($this->winCards) > 1)
			return true;
		else
			return false;
	}

	public function getCards()
	{
		return $this->cards;
	}

	public function getWinCards()
	{
		return $this->winCards;
	}
}