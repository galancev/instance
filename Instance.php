<?php

namespace EG\Func;

/**
 * Trait Instance
 * @package EG\Func
 */
trait Instance
{
    /**
     * Возвращает синглтон класса
     * @return static
     */
    public static function instance()
    {
        static $instance;

        if (!($instance instanceof static))
            $instance = static::factory();

        return $instance;
    }

    /**
     * Возвращает новый экземпляр класса
     * @return static
     */
    public static function factory()
    {
        return new static;
    }
}
