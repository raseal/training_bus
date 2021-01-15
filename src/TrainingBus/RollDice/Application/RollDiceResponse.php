<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Application;

use Shared\Domain\Bus\Query\QueryResponse;

class RollDiceResponse implements QueryResponse
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
