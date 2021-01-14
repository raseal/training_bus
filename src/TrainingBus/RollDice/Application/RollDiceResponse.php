<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Application;

class RollDiceResponse
{
    private int $result;

    public function __construct(int $result)
    {
        $this->result = $result;
    }

    public function result(): int
    {
        return $this->result;
    }
}
