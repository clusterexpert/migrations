<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Version;

/**
 * @internal
 */
final class State
{
    public const NONE = 0;

    public const PRE = 1;

    public const EXEC = 2;

    public const POST = 3;

    public const STATES = [
        self::NONE,
        self::PRE,
        self::EXEC,
        self::POST,
    ];

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
