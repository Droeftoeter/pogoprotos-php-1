<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Responses/RecycleInventoryItemResponse.proto
 */


namespace POGOProtos\Networking\Responses\RecycleInventoryItemResponse;

/**
 * Protobuf enum :
 * POGOProtos.Networking.Responses.RecycleInventoryItemResponse.Result
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
     * ERROR_NOT_ENOUGH_COPIES = 2
     */
    const ERROR_NOT_ENOUGH_COPIES_VALUE = 2;

    /**
     * ERROR_CANNOT_RECYCLE_INCUBATORS = 3
     */
    const ERROR_CANNOT_RECYCLE_INCUBATORS_VALUE = 3;

    /**
     * @var \POGOProtos\Networking\Responses\RecycleInventoryItemResponse\Result
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Networking\Responses\RecycleInventoryItemResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\RecycleInventoryItemResponse\Result
     */
    protected static $ERROR_NOT_ENOUGH_COPIES = null;

    /**
     * @var \POGOProtos\Networking\Responses\RecycleInventoryItemResponse\Result
     */
    protected static $ERROR_CANNOT_RECYCLE_INCUBATORS = null;

    /**
     * @return \POGOProtos\Networking\Responses\RecycleInventoryItemResponse\Result
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\RecycleInventoryItemResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\RecycleInventoryItemResponse\Result
     */
    public static function ERROR_NOT_ENOUGH_COPIES()
    {
        if (self::$ERROR_NOT_ENOUGH_COPIES !== null) {
            return self::$ERROR_NOT_ENOUGH_COPIES;
        }

        return self::$ERROR_NOT_ENOUGH_COPIES = new self('ERROR_NOT_ENOUGH_COPIES', self::ERROR_NOT_ENOUGH_COPIES_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\RecycleInventoryItemResponse\Result
     */
    public static function ERROR_CANNOT_RECYCLE_INCUBATORS()
    {
        if (self::$ERROR_CANNOT_RECYCLE_INCUBATORS !== null) {
            return self::$ERROR_CANNOT_RECYCLE_INCUBATORS;
        }

        return self::$ERROR_CANNOT_RECYCLE_INCUBATORS = new self('ERROR_CANNOT_RECYCLE_INCUBATORS', self::ERROR_CANNOT_RECYCLE_INCUBATORS_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\RecycleInventoryItemResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::SUCCESS();
            case 2: return self::ERROR_NOT_ENOUGH_COPIES();
            case 3: return self::ERROR_CANNOT_RECYCLE_INCUBATORS();
            default: return null;
        }
    }


}

