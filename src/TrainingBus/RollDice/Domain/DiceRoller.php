<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Domain;

use TrainingBus\RollDice\Domain\ValueObjects\DiceSides;

interface DiceRoller
{
    public function roll(DiceSides $sides) : int;
}
