<?php

declare(strict_types=1);

namespace TrainingBusWeb\Controller;

use Shared\Domain\Bus\Query\QueryBus;
use Symfony\Component\HttpFoundation\Response;
use TrainingBus\RollDice\Application\RollDiceQuery;

class RollDiceController
{
    private QueryBus $query_bus;

    public function __construct(QueryBus $a_query_bus)
    {
        $this->query_bus = $a_query_bus;
    }

    public function roll(): Response
    {
        $query = new RollDiceQuery(6);

        $result = $this->query_bus->dispatch($query);

        return new Response('RollDice response: ' . $result->result());
    }
}
