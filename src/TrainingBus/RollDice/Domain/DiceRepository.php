<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Domain;

use TrainingBus\RollDice\Domain\ValueObjects\DiceRolls;

interface DiceRepository
{
    public function persist(DiceRolls $a_dice_roll) : void;
}
