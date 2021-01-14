<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Infrastructure;

use TrainingBus\RollDice\Domain\DiceRepository;
use TrainingBus\RollDice\Domain\ValueObjects\DiceSides;

class DiceRepositoryLocal implements DiceRepository
{
    private const MINIMUM_POINT = 1;

    public function roll(DiceSides $sides) : int
    {
        return random_int(self::MINIMUM_POINT, $sides->sides());
    }
}
