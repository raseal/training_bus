<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid as RamseyUuid;

class Uuid
{
    private string $value;

    public function __construct(string $a_value)
    {
        $this->ensureValidUuid($a_value);
        $this->value = $a_value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public static function random() : self
    {
        return new self(RamseyUuid::uuid4()->toString());
    }

    private function ensureValidUuid(string $value) : void
    {
        if (!RamseyUuid::isValid($value)) {
            throw new InvalidArgumentException("<$value> is not a valid UUID");
        }
    }
}
