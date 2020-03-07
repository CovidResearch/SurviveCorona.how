<?php declare(strict_types=1);

/**
 * This file is part of www.SurviveCorona.how.
 *
 * Copyright © 2020 Theodore R. Smith <theodore@phpexperts.pro>
 *   GPG Fingerprint: 4BF8 2613 1C34 87AC D28F  2AD8 EB24 A91D D612 5690
 *   https://www.phpexperts.pro/
 *   https://github.com/hopeseekr/SurviveCorona.how/
 *
 * This file is licensed under the MIT License.
 */

namespace SurviveCorona\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Checks if phpunit was togged in debug mode or not.
     * See https://stackoverflow.com/a/12612733/430062.
     */
    public static function isDebugOn(): bool
    {
        return in_array('--debug', $_SERVER['argv'], true);
    }
}
