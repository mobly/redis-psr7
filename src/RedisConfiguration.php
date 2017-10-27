<?php

namespace Mobly\Cache\Adapter\Redis;

use Mobly\Cache\CacheAdapterConfiguration;

/**
 * Class RedisConfiguration
 *
 * @package Mobly\Cache\Adapter\Redis
 */
class RedisConfiguration extends CacheAdapterConfiguration
{
    /**
     * @var int
     */
    protected $select = RedisAdapter::DEFAULT_DB;

    /**
     * @return int
     */
    public function getSelect()
    {
        return $this->select;
    }

    /**
     * @param int $select
     */
    public function setSelect($select)
    {
        $this->select = $select;
    }

}