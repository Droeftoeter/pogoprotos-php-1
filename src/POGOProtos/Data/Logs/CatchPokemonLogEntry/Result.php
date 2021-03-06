<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Logs/CatchPokemonLogEntry.proto
 */


namespace POGOProtos\Data\Logs\CatchPokemonLogEntry;

/**
 * Protobuf enum : POGOProtos.Data.Logs.CatchPokemonLogEntry.Result
 */
class Result extends \Protobuf\Enum
{

    /**
     * UNSET = 0
     */
    const UNSET_VALUE = 0;

    /**
     * POKEMON_CAPTURED = 1
     */
    const POKEMON_CAPTURED_VALUE = 1;

    /**
     * POKEMON_FLED = 2
     */
    const POKEMON_FLED_VALUE = 2;

    /**
     * POKEMON_HATCHED = 3
     */
    const POKEMON_HATCHED_VALUE = 3;

    /**
     * @var \POGOProtos\Data\Logs\CatchPokemonLogEntry\Result
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Data\Logs\CatchPokemonLogEntry\Result
     */
    protected static $POKEMON_CAPTURED = null;

    /**
     * @var \POGOProtos\Data\Logs\CatchPokemonLogEntry\Result
     */
    protected static $POKEMON_FLED = null;

    /**
     * @var \POGOProtos\Data\Logs\CatchPokemonLogEntry\Result
     */
    protected static $POKEMON_HATCHED = null;

    /**
     * @return \POGOProtos\Data\Logs\CatchPokemonLogEntry\Result
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Logs\CatchPokemonLogEntry\Result
     */
    public static function POKEMON_CAPTURED()
    {
        if (self::$POKEMON_CAPTURED !== null) {
            return self::$POKEMON_CAPTURED;
        }

        return self::$POKEMON_CAPTURED = new self('POKEMON_CAPTURED', self::POKEMON_CAPTURED_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Logs\CatchPokemonLogEntry\Result
     */
    public static function POKEMON_FLED()
    {
        if (self::$POKEMON_FLED !== null) {
            return self::$POKEMON_FLED;
        }

        return self::$POKEMON_FLED = new self('POKEMON_FLED', self::POKEMON_FLED_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Logs\CatchPokemonLogEntry\Result
     */
    public static function POKEMON_HATCHED()
    {
        if (self::$POKEMON_HATCHED !== null) {
            return self::$POKEMON_HATCHED;
        }

        return self::$POKEMON_HATCHED = new self('POKEMON_HATCHED', self::POKEMON_HATCHED_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Data\Logs\CatchPokemonLogEntry\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::POKEMON_CAPTURED();
            case 2: return self::POKEMON_FLED();
            case 3: return self::POKEMON_HATCHED();
            default: return null;
        }
    }


}

