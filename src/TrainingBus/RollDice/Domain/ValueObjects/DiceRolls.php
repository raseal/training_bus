<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Domain\ValueObjects;

use InvalidArgumentException;

class DiceRolls
{
    private int $dice_roll;

    public function __construct(int $dice_roll)
    {
        $this->assertValidRoll($dice_roll);
        $this->dice_roll = $dice_roll;
    }

    public function diceRoll(): int
    {
        return $this->dice_roll;
    }

    private function assertValidRoll(int $dice_roll): void
    {
        if ($dice_roll < 1) {
            throw new InvalidArgumentException('A dice roll only can be positive!');
        }
    }
}
