<?php

namespace Faker\Provider;

class Thing extends Base
{
    protected static $thingFormats = [
        "{{noun}} {{thingFunction}}",
        "{{adjective}} {{noun}} {{thingFunction}}",
        "{{adjective}} {{thingFunction}}"
    ];
    protected static $adjective = [];
    protected static $noun = [];
    protected static $thingFunction = [];

    /**
     * @return string
     * @example 'Electric Steel Bender'
     *
     */
    public function thing()
    {
        $format = static::randomElement(static::$thingFormats);

        return $this->generator->parse($format);
    }

    /**
     * @return string
     * @example 'Electric'
     *
     */
    public function adjective()
    {
        return static::randomElement(static::$adjective);
    }


    /**
     * @return string
     * @example 'Bender'
     *
     */
    public function thingFunction()
    {
        return static::randomElement(static::$thingFunction);
    }

    /**
     * @return string
     * @example 'Steel'
     *
     */
    public function noun()
    {
        return static::randomElement(static::$noun);
    }

}
