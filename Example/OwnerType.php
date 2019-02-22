<?php
declare(strict_types=1);

namespace Example;

use MyCLabs\Enum\Enum;

final class OwnerType extends Enum
{
    private const VALUE_PERSON = 1;
    private const VALUE_COMPANY = 2;


    public static function PERSON(): self
    {
        return new self(self::VALUE_PERSON);
    }

    public static function COMPANY(): self
    {
        return new self(self::VALUE_COMPANY);
    }

    public static function fromString(string $value): self
    {
        return new self((int)$value);
    }

    public function toString(): string
    {
        return (string)$this->value;
    }
}