<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

spl_autoload_register(function ($class_name) {
    require_once __DIR__.'/../'.str_replace('\\','/',$class_name) .'.php';
});


use poker\libs\PokerGame;
$poker = new PokerGame();
$deck = $poker->init();
$dealer = new \poker\libs\Dealer($deck);
$player = new \poker\libs\Player($dealer);
$i = 0;
$win = false;
while($i < 1000)
{
    $player->withdraw();
    if($player->isWin())
    {
        $win = true;
        break;
    }
    $i++;
}

if($win){
    echo "Win after ($i) \n";
    \poker\libs\Card::printCard($player->getWinCards());
}else{
    echo "Loose after ($i) \n";
}