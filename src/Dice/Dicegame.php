<?php
namespace Jay\Dice;

require ANAX_INSTALL_PATH . "/vendor/autoload.php";


class Dicegame
{
    public function __construct()
    {
        $this->player1 = new Player();
        $this->player2 = new Player();
        $this->players = [$this->player1, $this->player2];
        $this->round = new Round();
        $this->dice = new Dice();
        $this->currentPlayer = 0;
        $this->throws = [];
    }

    public function play()
    {
        $throw = $this->round->roll($this->players[$this->currentPlayer]->score);
        if ($throw == 1) {
            $this->save();
        } elseif ($throw == 100) {
            $this->players[$this->currentPlayer]->score = "WINNER!!!!";
        } else {
            array_push($this->throws, $throw);
        }
    }

    public function save()
    {
        $this->players[$this->currentPlayer]->score += $this->round->stop();
        if ($this->currentPlayer == 0) {
            $this->currentPlayer = 1;
        } else {
            $this->currentPlayer = 0;
        }
        $this->throws = [];
    }
}
