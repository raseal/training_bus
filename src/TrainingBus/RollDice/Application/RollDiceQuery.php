<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Application;

class RollDiceQuery
{
    private int $side_number;

    public function __construct(int $a_side_number)
    {
        $this->side_number = $a_side_number;
    }

    public function sideNumber(): int
    {
        return $this->side_number;
    }
}
