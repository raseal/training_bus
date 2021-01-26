<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Infrastructure;

use TrainingBus\RollDice\Domain\DiceRepository;
use TrainingBus\RollDice\Domain\ValueObjects\DiceRolls;
use function file_put_contents;
use const FILE_APPEND;
use const PHP_EOL;

class CSVDiceRepository implements DiceRepository
{
    public function persist(DiceRolls $a_dice_roll): void
    {
        $today = date('d/m/Y H:i:s');
        file_put_contents('results.csv', $a_dice_roll->diceRoll() . ',' . $today . PHP_EOL, FILE_APPEND);
    }
}
