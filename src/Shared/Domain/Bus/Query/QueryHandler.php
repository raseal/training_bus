<?php

declare(strict_types=1);

namespace TrainingBus\Shared\Domain\Bus\Query;

interface QueryHandler
{
    public function exec(Query $query) : QueryResponse;
}
