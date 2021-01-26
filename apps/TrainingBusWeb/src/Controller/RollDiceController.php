<?php

declare(strict_types=1);

namespace TrainingBusWeb\Controller;

use Shared\Domain\Bus\Command\CommandBus;
use Shared\Domain\Bus\Query\QueryBus;
use Symfony\Component\HttpFoundation\Response;
use TrainingBus\RollDice\Application\RollDiceQuery;
use TrainingBus\RollDice\Application\SaveRollCommand;

class RollDiceController
{
    private QueryBus $query_bus;
    private CommandBus $command_bus;

    public function __construct(QueryBus $a_query_bus, CommandBus $a_command_bus)
    {
        $this->query_bus = $a_query_bus;
        $this->command_bus = $a_command_bus;
    }

    public function roll(): Response
    {
        $query = new RollDiceQuery(6);

        $result = $this->query_bus->dispatch($query);

        return new Response('RollDice response: ' . $result->result());
    }

    public function saveRoll(string $roll): Response
    {
        $command = new SaveRollCommand((int)$roll);

        $this->command_bus->dispatch($command);

        return new Response($roll .' saved!');
    }
}
