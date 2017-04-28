<?php
namespace Jay\Dice;

class Dice
{
    public function throwDice()
    {
        return rand(1, 6);
    }
}
