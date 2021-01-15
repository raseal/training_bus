<?php

declare(strict_types=1);

namespace TrainingBus\RollDice\Application;

use Shared\Domain\Bus\Query\Query;
use Shared\Domain\Bus\Query\QueryHandler;
use Shared\Domain\Bus\Query\QueryResponse;
use Shared\Infrastructure\Bus\Query\QueryHandlerWrapper;
use TrainingBus\RollDice\Domain\DiceRepository;
use TrainingBus\RollDice\Domain\ValueObjects\DiceSides;

class RollDiceQueryHandler extends QueryHandlerWrapper implements QueryHandler
{
    private DiceRepository $dice_repository;

    public function __construct(DiceRepository $a_dice_repository)
    {
        $this->dice_repository = $a_dice_repository;
    }

    public function __invoke(RollDiceQuery $query) : QueryResponse
    {
        return $this->exec($query);
    }

    public function exec(Query $query): QueryResponse
    {
        $sides = new DiceSides($query->sideNumber());
        $result = $this->dice_repository->roll($sides);

        return new RollDiceResponse($result);
    }
}
