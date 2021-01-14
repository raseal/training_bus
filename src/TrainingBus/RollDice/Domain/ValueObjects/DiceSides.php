<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Domain\ValueObjects;

use InvalidArgumentException;

class DiceSides
{
    private int $sides;

    public function __construct(int $sides)
    {
        $this->assertValidSide($sides);
        $this->sides = $sides;
    }

    private function assertValidSide(int $sides): bool
    {
        if ($sides <= 0) {
            throw new InvalidArgumentException('Sides only can be positive!');
        }

        return true;
    }

    public function sides(): int
    {
        return $this->sides;
    }
}
