<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Application;

use Shared\Domain\Bus\Command\Command;

class SaveRollCommand implements Command
{
    private int $dice_roll;

    public function __construct(int $a_dice_roll)
    {
        $this->dice_roll = $a_dice_roll;
    }

    public function diceRoll(): int
    {
        return $this->dice_roll;
    }
}
