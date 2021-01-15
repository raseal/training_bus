<?php

declare(strict_types=1);

namespace TrainingBus\Shared\Infrastructure\Bus\Query;

use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use TrainingBus\Shared\Domain\Bus\Query\Query;
use TrainingBus\Shared\Domain\Bus\Query\QueryBus;
use TrainingBus\Shared\Domain\Bus\Query\QueryResponse;

class SymfonyQueryBus implements QueryBus
{
    use HandleTrait;

    public function __construct(MessageBusInterface $bus)
    {
        $this->messageBus = $bus;
    }

    public function dispatch(Query $query): QueryResponse
    {
        return $this->handle($query);
    }
}
