<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Application;

use Shared\Domain\Bus\Query\Query;

class RollDiceQuery implements Query
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
