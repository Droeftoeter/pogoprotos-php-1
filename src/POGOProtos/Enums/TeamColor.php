<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Enums/TeamColor.proto
 */


namespace POGOProtos\Enums;

/**
 * Protobuf enum : POGOProtos.Enums.TeamColor
 */
class TeamColor extends \Protobuf\Enum
{

    /**
     * NEUTRAL = 0
     */
    const NEUTRAL_VALUE = 0;

    /**
     * BLUE = 1
     */
    const BLUE_VALUE = 1;

    /**
     * RED = 2
     */
    const RED_VALUE = 2;

    /**
     * YELLOW = 3
     */
    const YELLOW_VALUE = 3;

    /**
     * @var \POGOProtos\Enums\TeamColor
     */
    protected static $NEUTRAL = null;

    /**
     * @var \POGOProtos\Enums\TeamColor
     */
    protected static $BLUE = null;

    /**
     * @var \POGOProtos\Enums\TeamColor
     */
    protected static $RED = null;

    /**
     * @var \POGOProtos\Enums\TeamColor
     */
    protected static $YELLOW = null;

    /**
     * @return \POGOProtos\Enums\TeamColor
     */
    public static function NEUTRAL()
    {
        if (self::$NEUTRAL !== null) {
            return self::$NEUTRAL;
        }

        return self::$NEUTRAL = new self('NEUTRAL', self::NEUTRAL_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\TeamColor
     */
    public static function BLUE()
    {
        if (self::$BLUE !== null) {
            return self::$BLUE;
        }

        return self::$BLUE = new self('BLUE', self::BLUE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\TeamColor
     */
    public static function RED()
    {
        if (self::$RED !== null) {
            return self::$RED;
        }

        return self::$RED = new self('RED', self::RED_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\TeamColor
     */
    public static function YELLOW()
    {
        if (self::$YELLOW !== null) {
            return self::$YELLOW;
        }

        return self::$YELLOW = new self('YELLOW', self::YELLOW_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Enums\TeamColor
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::NEUTRAL();
            case 1: return self::BLUE();
            case 2: return self::RED();
            case 3: return self::YELLOW();
            default: return null;
        }
    }


}
