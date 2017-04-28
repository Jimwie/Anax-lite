<?php
namespace Jay\Dice;

class Round
{
    public function __construct()
    {
        $this->dice = new Dice();
        $this->currentScore = 0;
        $this->throw = 0;
    }

    public function roll($score)
    {
        $this->throw = $this->dice->throwDice();
        if ($this->throw == 1) {
            $this->currentScore = 0;
            return $this->throw;
        } else {
            $this->currentScore += $this->throw;
            if ($score + $this->currentScore >= 100) {
                return 100;
            } else {
                return $this->throw;
            }
        }
    }

    public function stop()
    {
        $roundScore = $this->currentScore;
        $this->currentScore = 0;
        return $roundScore;
    }
}
