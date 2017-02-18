<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Enums/ItemCategory.proto
 */


namespace POGOProtos\Enums;

/**
 * Protobuf enum : POGOProtos.Enums.ItemCategory
 */
class ItemCategory extends \Protobuf\Enum
{

    /**
     * ITEM_CATEGORY_NONE = 0
     */
    const ITEM_CATEGORY_NONE_VALUE = 0;

    /**
     * ITEM_CATEGORY_POKEBALL = 1
     */
    const ITEM_CATEGORY_POKEBALL_VALUE = 1;

    /**
     * ITEM_CATEGORY_FOOD = 2
     */
    const ITEM_CATEGORY_FOOD_VALUE = 2;

    /**
     * ITEM_CATEGORY_MEDICINE = 3
     */
    const ITEM_CATEGORY_MEDICINE_VALUE = 3;

    /**
     * ITEM_CATEGORY_BOOST = 4
     */
    const ITEM_CATEGORY_BOOST_VALUE = 4;

    /**
     * ITEM_CATEGORY_UTILITES = 5
     */
    const ITEM_CATEGORY_UTILITES_VALUE = 5;

    /**
     * ITEM_CATEGORY_CAMERA = 6
     */
    const ITEM_CATEGORY_CAMERA_VALUE = 6;

    /**
     * ITEM_CATEGORY_DISK = 7
     */
    const ITEM_CATEGORY_DISK_VALUE = 7;

    /**
     * ITEM_CATEGORY_INCUBATOR = 8
     */
    const ITEM_CATEGORY_INCUBATOR_VALUE = 8;

    /**
     * ITEM_CATEGORY_INCENSE = 9
     */
    const ITEM_CATEGORY_INCENSE_VALUE = 9;

    /**
     * ITEM_CATEGORY_XP_BOOST = 10
     */
    const ITEM_CATEGORY_XP_BOOST_VALUE = 10;

    /**
     * ITEM_CATEGORY_INVENTORY_UPGRADE = 11
     */
    const ITEM_CATEGORY_INVENTORY_UPGRADE_VALUE = 11;

    /**
     * ITEM_CATEGORY_EVOLUTION_REQUIREMENT = 12
     */
    const ITEM_CATEGORY_EVOLUTION_REQUIREMENT_VALUE = 12;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_NONE = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_POKEBALL = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_FOOD = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_MEDICINE = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_BOOST = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_UTILITES = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_CAMERA = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_DISK = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_INCUBATOR = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_INCENSE = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_XP_BOOST = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_INVENTORY_UPGRADE = null;

    /**
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected static $ITEM_CATEGORY_EVOLUTION_REQUIREMENT = null;

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_NONE()
    {
        if (self::$ITEM_CATEGORY_NONE !== null) {
            return self::$ITEM_CATEGORY_NONE;
        }

        return self::$ITEM_CATEGORY_NONE = new self('ITEM_CATEGORY_NONE', self::ITEM_CATEGORY_NONE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_POKEBALL()
    {
        if (self::$ITEM_CATEGORY_POKEBALL !== null) {
            return self::$ITEM_CATEGORY_POKEBALL;
        }

        return self::$ITEM_CATEGORY_POKEBALL = new self('ITEM_CATEGORY_POKEBALL', self::ITEM_CATEGORY_POKEBALL_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_FOOD()
    {
        if (self::$ITEM_CATEGORY_FOOD !== null) {
            return self::$ITEM_CATEGORY_FOOD;
        }

        return self::$ITEM_CATEGORY_FOOD = new self('ITEM_CATEGORY_FOOD', self::ITEM_CATEGORY_FOOD_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_MEDICINE()
    {
        if (self::$ITEM_CATEGORY_MEDICINE !== null) {
            return self::$ITEM_CATEGORY_MEDICINE;
        }

        return self::$ITEM_CATEGORY_MEDICINE = new self('ITEM_CATEGORY_MEDICINE', self::ITEM_CATEGORY_MEDICINE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_BOOST()
    {
        if (self::$ITEM_CATEGORY_BOOST !== null) {
            return self::$ITEM_CATEGORY_BOOST;
        }

        return self::$ITEM_CATEGORY_BOOST = new self('ITEM_CATEGORY_BOOST', self::ITEM_CATEGORY_BOOST_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_UTILITES()
    {
        if (self::$ITEM_CATEGORY_UTILITES !== null) {
            return self::$ITEM_CATEGORY_UTILITES;
        }

        return self::$ITEM_CATEGORY_UTILITES = new self('ITEM_CATEGORY_UTILITES', self::ITEM_CATEGORY_UTILITES_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_CAMERA()
    {
        if (self::$ITEM_CATEGORY_CAMERA !== null) {
            return self::$ITEM_CATEGORY_CAMERA;
        }

        return self::$ITEM_CATEGORY_CAMERA = new self('ITEM_CATEGORY_CAMERA', self::ITEM_CATEGORY_CAMERA_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_DISK()
    {
        if (self::$ITEM_CATEGORY_DISK !== null) {
            return self::$ITEM_CATEGORY_DISK;
        }

        return self::$ITEM_CATEGORY_DISK = new self('ITEM_CATEGORY_DISK', self::ITEM_CATEGORY_DISK_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_INCUBATOR()
    {
        if (self::$ITEM_CATEGORY_INCUBATOR !== null) {
            return self::$ITEM_CATEGORY_INCUBATOR;
        }

        return self::$ITEM_CATEGORY_INCUBATOR = new self('ITEM_CATEGORY_INCUBATOR', self::ITEM_CATEGORY_INCUBATOR_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_INCENSE()
    {
        if (self::$ITEM_CATEGORY_INCENSE !== null) {
            return self::$ITEM_CATEGORY_INCENSE;
        }

        return self::$ITEM_CATEGORY_INCENSE = new self('ITEM_CATEGORY_INCENSE', self::ITEM_CATEGORY_INCENSE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_XP_BOOST()
    {
        if (self::$ITEM_CATEGORY_XP_BOOST !== null) {
            return self::$ITEM_CATEGORY_XP_BOOST;
        }

        return self::$ITEM_CATEGORY_XP_BOOST = new self('ITEM_CATEGORY_XP_BOOST', self::ITEM_CATEGORY_XP_BOOST_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_INVENTORY_UPGRADE()
    {
        if (self::$ITEM_CATEGORY_INVENTORY_UPGRADE !== null) {
            return self::$ITEM_CATEGORY_INVENTORY_UPGRADE;
        }

        return self::$ITEM_CATEGORY_INVENTORY_UPGRADE = new self('ITEM_CATEGORY_INVENTORY_UPGRADE', self::ITEM_CATEGORY_INVENTORY_UPGRADE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function ITEM_CATEGORY_EVOLUTION_REQUIREMENT()
    {
        if (self::$ITEM_CATEGORY_EVOLUTION_REQUIREMENT !== null) {
            return self::$ITEM_CATEGORY_EVOLUTION_REQUIREMENT;
        }

        return self::$ITEM_CATEGORY_EVOLUTION_REQUIREMENT = new self('ITEM_CATEGORY_EVOLUTION_REQUIREMENT', self::ITEM_CATEGORY_EVOLUTION_REQUIREMENT_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Enums\ItemCategory
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::ITEM_CATEGORY_NONE();
            case 1: return self::ITEM_CATEGORY_POKEBALL();
            case 2: return self::ITEM_CATEGORY_FOOD();
            case 3: return self::ITEM_CATEGORY_MEDICINE();
            case 4: return self::ITEM_CATEGORY_BOOST();
            case 5: return self::ITEM_CATEGORY_UTILITES();
            case 6: return self::ITEM_CATEGORY_CAMERA();
            case 7: return self::ITEM_CATEGORY_DISK();
            case 8: return self::ITEM_CATEGORY_INCUBATOR();
            case 9: return self::ITEM_CATEGORY_INCENSE();
            case 10: return self::ITEM_CATEGORY_XP_BOOST();
            case 11: return self::ITEM_CATEGORY_INVENTORY_UPGRADE();
            case 12: return self::ITEM_CATEGORY_EVOLUTION_REQUIREMENT();
            default: return null;
        }
    }


}
