<?php

declare(strict_types=1);

namespace App\Validator;

class IsString
{
    public function validate($value): void
    {
        if (!is_string($value)) {
            throw new \LogicException('Value is not a string.');
        }
    }
}