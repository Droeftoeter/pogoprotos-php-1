<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Platform/Responses/GetStoreItemsResponse.proto
 */


namespace POGOProtos\Networking\Envelopes\GetStoreItemsResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Envelopes.GetStoreItemsResponse.Status
 */
class Status extends \Protobuf\Enum
{

    /**
     * UNDEFINED = 0
     */
    const UNDEFINED_VALUE = 0;

    /**
     * OKAY = 1
     */
    const OKAY_VALUE = 1;

    /**
     * @var \POGOProtos\Networking\Envelopes\GetStoreItemsResponse\Status
     */
    protected static $UNDEFINED = null;

    /**
     * @var \POGOProtos\Networking\Envelopes\GetStoreItemsResponse\Status
     */
    protected static $OKAY = null;

    /**
     * @return \POGOProtos\Networking\Envelopes\GetStoreItemsResponse\Status
     */
    public static function UNDEFINED()
    {
        if (self::$UNDEFINED !== null) {
            return self::$UNDEFINED;
        }

        return self::$UNDEFINED = new self('UNDEFINED', self::UNDEFINED_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Envelopes\GetStoreItemsResponse\Status
     */
    public static function OKAY()
    {
        if (self::$OKAY !== null) {
            return self::$OKAY;
        }

        return self::$OKAY = new self('OKAY', self::OKAY_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Envelopes\GetStoreItemsResponse\Status
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNDEFINED();
            case 1: return self::OKAY();
            default: return null;
        }
    }


}

