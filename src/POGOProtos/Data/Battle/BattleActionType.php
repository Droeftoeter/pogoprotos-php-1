<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Battle/BattleActionType.proto
 */


namespace POGOProtos\Data\Battle;

/**
 * Protobuf enum : POGOProtos.Data.Battle.BattleActionType
 */
class BattleActionType extends \Protobuf\Enum
{

    /**
     * ACTION_UNSET = 0
     */
    const ACTION_UNSET_VALUE = 0;

    /**
     * ACTION_ATTACK = 1
     */
    const ACTION_ATTACK_VALUE = 1;

    /**
     * ACTION_DODGE = 2
     */
    const ACTION_DODGE_VALUE = 2;

    /**
     * ACTION_SPECIAL_ATTACK = 3
     */
    const ACTION_SPECIAL_ATTACK_VALUE = 3;

    /**
     * ACTION_SWAP_POKEMON = 4
     */
    const ACTION_SWAP_POKEMON_VALUE = 4;

    /**
     * ACTION_FAINT = 5
     */
    const ACTION_FAINT_VALUE = 5;

    /**
     * ACTION_PLAYER_JOIN = 6
     */
    const ACTION_PLAYER_JOIN_VALUE = 6;

    /**
     * ACTION_PLAYER_QUIT = 7
     */
    const ACTION_PLAYER_QUIT_VALUE = 7;

    /**
     * ACTION_VICTORY = 8
     */
    const ACTION_VICTORY_VALUE = 8;

    /**
     * ACTION_DEFEAT = 9
     */
    const ACTION_DEFEAT_VALUE = 9;

    /**
     * ACTION_TIMED_OUT = 10
     */
    const ACTION_TIMED_OUT_VALUE = 10;

    /**
     * @var \POGOProtos\Data\Battle\BattleActionType
     */
    protected static $ACTION_UNSET = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleActionType
     */
    protected static $ACTION_ATTACK = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleActionType
     */
    protected static $ACTION_DODGE = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleActionType
     */
    protected static $ACTION_SPECIAL_ATTACK = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleActionType
     */
    protected static $ACTION_SWAP_POKEMON = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleActionType
     */
    protected static $ACTION_FAINT = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleActionType
     */
    protected static $ACTION_PLAYER_JOIN = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleActionType
     */
    protected static $ACTION_PLAYER_QUIT = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleActionType
     */
    protected static $ACTION_VICTORY = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleActionType
     */
    protected static $ACTION_DEFEAT = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleActionType
     */
    protected static $ACTION_TIMED_OUT = null;

    /**
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function ACTION_UNSET()
    {
        if (self::$ACTION_UNSET !== null) {
            return self::$ACTION_UNSET;
        }

        return self::$ACTION_UNSET = new self('ACTION_UNSET', self::ACTION_UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function ACTION_ATTACK()
    {
        if (self::$ACTION_ATTACK !== null) {
            return self::$ACTION_ATTACK;
        }

        return self::$ACTION_ATTACK = new self('ACTION_ATTACK', self::ACTION_ATTACK_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function ACTION_DODGE()
    {
        if (self::$ACTION_DODGE !== null) {
            return self::$ACTION_DODGE;
        }

        return self::$ACTION_DODGE = new self('ACTION_DODGE', self::ACTION_DODGE_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function ACTION_SPECIAL_ATTACK()
    {
        if (self::$ACTION_SPECIAL_ATTACK !== null) {
            return self::$ACTION_SPECIAL_ATTACK;
        }

        return self::$ACTION_SPECIAL_ATTACK = new self('ACTION_SPECIAL_ATTACK', self::ACTION_SPECIAL_ATTACK_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function ACTION_SWAP_POKEMON()
    {
        if (self::$ACTION_SWAP_POKEMON !== null) {
            return self::$ACTION_SWAP_POKEMON;
        }

        return self::$ACTION_SWAP_POKEMON = new self('ACTION_SWAP_POKEMON', self::ACTION_SWAP_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function ACTION_FAINT()
    {
        if (self::$ACTION_FAINT !== null) {
            return self::$ACTION_FAINT;
        }

        return self::$ACTION_FAINT = new self('ACTION_FAINT', self::ACTION_FAINT_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function ACTION_PLAYER_JOIN()
    {
        if (self::$ACTION_PLAYER_JOIN !== null) {
            return self::$ACTION_PLAYER_JOIN;
        }

        return self::$ACTION_PLAYER_JOIN = new self('ACTION_PLAYER_JOIN', self::ACTION_PLAYER_JOIN_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function ACTION_PLAYER_QUIT()
    {
        if (self::$ACTION_PLAYER_QUIT !== null) {
            return self::$ACTION_PLAYER_QUIT;
        }

        return self::$ACTION_PLAYER_QUIT = new self('ACTION_PLAYER_QUIT', self::ACTION_PLAYER_QUIT_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function ACTION_VICTORY()
    {
        if (self::$ACTION_VICTORY !== null) {
            return self::$ACTION_VICTORY;
        }

        return self::$ACTION_VICTORY = new self('ACTION_VICTORY', self::ACTION_VICTORY_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function ACTION_DEFEAT()
    {
        if (self::$ACTION_DEFEAT !== null) {
            return self::$ACTION_DEFEAT;
        }

        return self::$ACTION_DEFEAT = new self('ACTION_DEFEAT', self::ACTION_DEFEAT_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function ACTION_TIMED_OUT()
    {
        if (self::$ACTION_TIMED_OUT !== null) {
            return self::$ACTION_TIMED_OUT;
        }

        return self::$ACTION_TIMED_OUT = new self('ACTION_TIMED_OUT', self::ACTION_TIMED_OUT_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Data\Battle\BattleActionType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::ACTION_UNSET();
            case 1: return self::ACTION_ATTACK();
            case 2: return self::ACTION_DODGE();
            case 3: return self::ACTION_SPECIAL_ATTACK();
            case 4: return self::ACTION_SWAP_POKEMON();
            case 5: return self::ACTION_FAINT();
            case 6: return self::ACTION_PLAYER_JOIN();
            case 7: return self::ACTION_PLAYER_QUIT();
            case 8: return self::ACTION_VICTORY();
            case 9: return self::ACTION_DEFEAT();
            case 10: return self::ACTION_TIMED_OUT();
            default: return null;
        }
    }


}

