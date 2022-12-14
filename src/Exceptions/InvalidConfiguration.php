<?php

namespace Spatie\ServerMonitor\Exceptions;

use Exception;
use Spatie\ServerMonitor\Models\Check;
use Spatie\ServerMonitor\Models\Host;
use Spatie\ServerMonitor\Models\Record;

class InvalidConfiguration extends Exception
{
    public static function checkModelIsNotValid(string $className)
    {
        return new static("The given model class `{$className}` does not extend `".Check::class.'`');
    }

    public static function hostModelIsNotValid(string $className)
    {
        return new static("The given model class `{$className}` does not extend `".Host::class.'`');
    }

    public static function recordModelIsNotValid(string $className)
    {
        return new static("The given model class `{$className}` does not extend `".Record::class.'`');
    }
}
