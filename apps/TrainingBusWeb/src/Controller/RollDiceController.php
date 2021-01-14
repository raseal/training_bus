<?php

declare(strict_types=1);

namespace TrainingBusWeb\Controller;

use Symfony\Component\HttpFoundation\Response;
use TrainingBus\RollDice\Application\RollDiceQuery;
use TrainingBus\RollDice\Application\RollDiceQueryHandler;

class RollDiceController
{
    private RollDiceQueryHandler $roll_dice_handler;

    public function __construct(RollDiceQueryHandler $a_roll_dice_handler)
    {
        $this->roll_dice_handler = $a_roll_dice_handler;
    }

    public function index():Response
    {
        $query = new RollDiceQuery(6);

        $result = $this->roll_dice_handler->execute($query);

        return new Response('RollDice response: ' . $result->result());
    }
}
