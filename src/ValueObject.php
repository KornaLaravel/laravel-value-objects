<?php

declare(strict_types=1);

namespace MichaelRubel\ValueObjects;

interface ValueObject
{
    /**
     * @return static
     */
    public static function make(): static;
}