<?php

namespace Mobly\Cache\Adapter\Redis;

/**
 * Interface RedisAdapterInterface
 *
 * @package Mobly\Cache\Adapter\Redis
 */
interface RedisAdapterInterface
{
    const DEFAULT_DB = 0;

    const DELETE_KEY_OK = 1;

    const DELETE_KEY_NOT_FOUND = 0;
}