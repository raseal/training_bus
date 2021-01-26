<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Application;

use Shared\Domain\Bus\Command\CommandHandler;
use TrainingBus\RollDice\Domain\DiceRepository;
use TrainingBus\RollDice\Domain\ValueObjects\DiceRolls;

class SaveRollCommandHandler implements CommandHandler
{
    private DiceRepository $dice_repository;

    public function __construct(DiceRepository $a_dice_repository)
    {
        $this->dice_repository = $a_dice_repository;
    }

    public function __invoke(SaveRollCommand $command) : void
    {
        $dice_roll = new DiceRolls($command->diceRoll());
        $this->dice_repository->persist($dice_roll);
    }
}
