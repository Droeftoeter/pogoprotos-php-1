<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/UseItemPotionResponse.proto
 */


namespace POGOProtos\Networking\Responses\UseItemPotionResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.UseItemPotionResponse.Result
 */
class Result extends \Protobuf\Enum
{

    /**
     * UNSET = 0
     */
    const UNSET_VALUE = 0;

    /**
     * SUCCESS = 1
     */
    const SUCCESS_VALUE = 1;

    /**
     * ERROR_NO_POKEMON = 2
     */
    const ERROR_NO_POKEMON_VALUE = 2;

    /**
     * ERROR_CANNOT_USE = 3
     */
    const ERROR_CANNOT_USE_VALUE = 3;

    /**
     * ERROR_DEPLOYED_TO_FORT = 4
     */
    const ERROR_DEPLOYED_TO_FORT_VALUE = 4;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemPotionResponse\Result
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemPotionResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemPotionResponse\Result
     */
    protected static $ERROR_NO_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemPotionResponse\Result
     */
    protected static $ERROR_CANNOT_USE = null;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemPotionResponse\Result
     */
    protected static $ERROR_DEPLOYED_TO_FORT = null;

    /**
     * @return \POGOProtos\Networking\Responses\UseItemPotionResponse\Result
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\UseItemPotionResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\UseItemPotionResponse\Result
     */
    public static function ERROR_NO_POKEMON()
    {
        if (self::$ERROR_NO_POKEMON !== null) {
            return self::$ERROR_NO_POKEMON;
        }

        return self::$ERROR_NO_POKEMON = new self('ERROR_NO_POKEMON', self::ERROR_NO_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\UseItemPotionResponse\Result
     */
    public static function ERROR_CANNOT_USE()
    {
        if (self::$ERROR_CANNOT_USE !== null) {
            return self::$ERROR_CANNOT_USE;
        }

        return self::$ERROR_CANNOT_USE = new self('ERROR_CANNOT_USE', self::ERROR_CANNOT_USE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\UseItemPotionResponse\Result
     */
    public static function ERROR_DEPLOYED_TO_FORT()
    {
        if (self::$ERROR_DEPLOYED_TO_FORT !== null) {
            return self::$ERROR_DEPLOYED_TO_FORT;
        }

        return self::$ERROR_DEPLOYED_TO_FORT = new self('ERROR_DEPLOYED_TO_FORT', self::ERROR_DEPLOYED_TO_FORT_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\UseItemPotionResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::SUCCESS();
            case 2: return self::ERROR_NO_POKEMON();
            case 3: return self::ERROR_CANNOT_USE();
            case 4: return self::ERROR_DEPLOYED_TO_FORT();
            default: return null;
        }
    }


}
