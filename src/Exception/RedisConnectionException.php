<?php

namespace Mobly\Cache\Adapter\Redis\Exception;

use Psr\Cache\CacheException;

/**
 * Class RedisConnectionException
 *
 * @package Mobly\Cache\Adapter\Redis\Exception
 */
class RedisConnectionException extends \RuntimeException implements CacheException
{

}