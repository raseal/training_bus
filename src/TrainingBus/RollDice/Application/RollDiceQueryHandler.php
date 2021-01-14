<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Application;

use TrainingBus\RollDice\Domain\Dice;
use TrainingBus\RollDice\Domain\DiceRepository;
use TrainingBus\RollDice\Domain\ValueObjects\DiceSides;

class RollDiceQueryHandler
{
    private DiceRepository $dice_repository;

    public function __construct(DiceRepository $a_dice_repository)
    {
        $this->dice_repository = $a_dice_repository;
    }

    public function __invoke(RollDiceQuery $query)
    {
        $this->execute($query);
    }

    public function execute(RollDiceQuery $query): RollDiceResponse
    {
        $sides = new DiceSides($query->sideNumber());
        $result = $this->dice_repository->roll($sides);

        return new RollDiceResponse($result);
    }
}
