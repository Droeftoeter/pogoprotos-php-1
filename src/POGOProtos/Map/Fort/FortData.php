<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Map/Fort/FortData.proto
 */


namespace POGOProtos\Map\Fort;

/**
 * Protobuf message : POGOProtos.Map.Fort.FortData
 */
class FortData extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * id optional string = 1
     *
     * @var string
     */
    protected $id = null;

    /**
     * last_modified_timestamp_ms optional int64 = 2
     *
     * @var int
     */
    protected $last_modified_timestamp_ms = null;

    /**
     * latitude optional double = 3
     *
     * @var float
     */
    protected $latitude = null;

    /**
     * longitude optional double = 4
     *
     * @var float
     */
    protected $longitude = null;

    /**
     * owned_by_team optional enum = 5
     *
     * @var \POGOProtos\Enums\TeamColor
     */
    protected $owned_by_team = null;

    /**
     * guard_pokemon_id optional enum = 6
     *
     * @var \POGOProtos\Enums\PokemonId
     */
    protected $guard_pokemon_id = null;

    /**
     * guard_pokemon_cp optional int32 = 7
     *
     * @var int
     */
    protected $guard_pokemon_cp = null;

    /**
     * enabled optional bool = 8
     *
     * @var bool
     */
    protected $enabled = null;

    /**
     * type optional enum = 9
     *
     * @var \POGOProtos\Map\Fort\FortType
     */
    protected $type = null;

    /**
     * gym_points optional int64 = 10
     *
     * @var int
     */
    protected $gym_points = null;

    /**
     * is_in_battle optional bool = 11
     *
     * @var bool
     */
    protected $is_in_battle = null;

    /**
     * active_fort_modifier repeated enum = 12
     *
     * @var \Protobuf\Collection<\POGOProtos\Inventory\Item\ItemId>
     */
    protected $active_fort_modifier = null;

    /**
     * lure_info optional message = 13
     *
     * @var \POGOProtos\Map\Fort\FortLureInfo
     */
    protected $lure_info = null;

    /**
     * cooldown_complete_timestamp_ms optional int64 = 14
     *
     * @var int
     */
    protected $cooldown_complete_timestamp_ms = null;

    /**
     * sponsor optional enum = 15
     *
     * @var \POGOProtos\Map\Fort\FortSponsor
     */
    protected $sponsor = null;

    /**
     * rendering_type optional enum = 16
     *
     * @var \POGOProtos\Map\Fort\FortRenderingType
     */
    protected $rendering_type = null;

    /**
     * deploy_lockout_end_ms optional int64 = 17
     *
     * @var int
     */
    protected $deploy_lockout_end_ms = null;

    /**
     * Check if 'id' has a value
     *
     * @return bool
     */
    public function hasId()
    {
        return $this->id !== null;
    }

    /**
     * Get 'id' value
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set 'id' value
     *
     * @param string $value
     */
    public function setId($value = null)
    {
        $this->id = $value;
    }

    /**
     * Check if 'last_modified_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasLastModifiedTimestampMs()
    {
        return $this->last_modified_timestamp_ms !== null;
    }

    /**
     * Get 'last_modified_timestamp_ms' value
     *
     * @return int
     */
    public function getLastModifiedTimestampMs()
    {
        return $this->last_modified_timestamp_ms;
    }

    /**
     * Set 'last_modified_timestamp_ms' value
     *
     * @param int $value
     */
    public function setLastModifiedTimestampMs($value = null)
    {
        $this->last_modified_timestamp_ms = $value;
    }

    /**
     * Check if 'latitude' has a value
     *
     * @return bool
     */
    public function hasLatitude()
    {
        return $this->latitude !== null;
    }

    /**
     * Get 'latitude' value
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set 'latitude' value
     *
     * @param float $value
     */
    public function setLatitude($value = null)
    {
        $this->latitude = $value;
    }

    /**
     * Check if 'longitude' has a value
     *
     * @return bool
     */
    public function hasLongitude()
    {
        return $this->longitude !== null;
    }

    /**
     * Get 'longitude' value
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set 'longitude' value
     *
     * @param float $value
     */
    public function setLongitude($value = null)
    {
        $this->longitude = $value;
    }

    /**
     * Check if 'owned_by_team' has a value
     *
     * @return bool
     */
    public function hasOwnedByTeam()
    {
        return $this->owned_by_team !== null;
    }

    /**
     * Get 'owned_by_team' value
     *
     * @return \POGOProtos\Enums\TeamColor
     */
    public function getOwnedByTeam()
    {
        return $this->owned_by_team;
    }

    /**
     * Set 'owned_by_team' value
     *
     * @param \POGOProtos\Enums\TeamColor $value
     */
    public function setOwnedByTeam(\POGOProtos\Enums\TeamColor $value = null)
    {
        $this->owned_by_team = $value;
    }

    /**
     * Check if 'guard_pokemon_id' has a value
     *
     * @return bool
     */
    public function hasGuardPokemonId()
    {
        return $this->guard_pokemon_id !== null;
    }

    /**
     * Get 'guard_pokemon_id' value
     *
     * @return \POGOProtos\Enums\PokemonId
     */
    public function getGuardPokemonId()
    {
        return $this->guard_pokemon_id;
    }

    /**
     * Set 'guard_pokemon_id' value
     *
     * @param \POGOProtos\Enums\PokemonId $value
     */
    public function setGuardPokemonId(\POGOProtos\Enums\PokemonId $value = null)
    {
        $this->guard_pokemon_id = $value;
    }

    /**
     * Check if 'guard_pokemon_cp' has a value
     *
     * @return bool
     */
    public function hasGuardPokemonCp()
    {
        return $this->guard_pokemon_cp !== null;
    }

    /**
     * Get 'guard_pokemon_cp' value
     *
     * @return int
     */
    public function getGuardPokemonCp()
    {
        return $this->guard_pokemon_cp;
    }

    /**
     * Set 'guard_pokemon_cp' value
     *
     * @param int $value
     */
    public function setGuardPokemonCp($value = null)
    {
        $this->guard_pokemon_cp = $value;
    }

    /**
     * Check if 'enabled' has a value
     *
     * @return bool
     */
    public function hasEnabled()
    {
        return $this->enabled !== null;
    }

    /**
     * Get 'enabled' value
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set 'enabled' value
     *
     * @param bool $value
     */
    public function setEnabled($value = null)
    {
        $this->enabled = $value;
    }

    /**
     * Check if 'type' has a value
     *
     * @return bool
     */
    public function hasType()
    {
        return $this->type !== null;
    }

    /**
     * Get 'type' value
     *
     * @return \POGOProtos\Map\Fort\FortType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set 'type' value
     *
     * @param \POGOProtos\Map\Fort\FortType $value
     */
    public function setType(\POGOProtos\Map\Fort\FortType $value = null)
    {
        $this->type = $value;
    }

    /**
     * Check if 'gym_points' has a value
     *
     * @return bool
     */
    public function hasGymPoints()
    {
        return $this->gym_points !== null;
    }

    /**
     * Get 'gym_points' value
     *
     * @return int
     */
    public function getGymPoints()
    {
        return $this->gym_points;
    }

    /**
     * Set 'gym_points' value
     *
     * @param int $value
     */
    public function setGymPoints($value = null)
    {
        $this->gym_points = $value;
    }

    /**
     * Check if 'is_in_battle' has a value
     *
     * @return bool
     */
    public function hasIsInBattle()
    {
        return $this->is_in_battle !== null;
    }

    /**
     * Get 'is_in_battle' value
     *
     * @return bool
     */
    public function getIsInBattle()
    {
        return $this->is_in_battle;
    }

    /**
     * Set 'is_in_battle' value
     *
     * @param bool $value
     */
    public function setIsInBattle($value = null)
    {
        $this->is_in_battle = $value;
    }

    /**
     * Check if 'active_fort_modifier' has a value
     *
     * @return bool
     */
    public function hasActiveFortModifierList()
    {
        return $this->active_fort_modifier !== null;
    }

    /**
     * Get 'active_fort_modifier' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Inventory\Item\ItemId>
     */
    public function getActiveFortModifierList()
    {
        return $this->active_fort_modifier;
    }

    /**
     * Set 'active_fort_modifier' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Inventory\Item\ItemId> $value
     */
    public function setActiveFortModifierList(\Protobuf\Collection $value = null)
    {
        $this->active_fort_modifier = $value;
    }

    /**
     * Add a new element to 'active_fort_modifier'
     *
     * @param \POGOProtos\Inventory\Item\ItemId $value
     */
    public function addActiveFortModifier(\POGOProtos\Inventory\Item\ItemId $value)
    {
        if ($this->active_fort_modifier === null) {
            $this->active_fort_modifier = new \Protobuf\EnumCollection();
        }

        $this->active_fort_modifier->add($value);
    }

    /**
     * Check if 'lure_info' has a value
     *
     * @return bool
     */
    public function hasLureInfo()
    {
        return $this->lure_info !== null;
    }

    /**
     * Get 'lure_info' value
     *
     * @return \POGOProtos\Map\Fort\FortLureInfo
     */
    public function getLureInfo()
    {
        return $this->lure_info;
    }

    /**
     * Set 'lure_info' value
     *
     * @param \POGOProtos\Map\Fort\FortLureInfo $value
     */
    public function setLureInfo(\POGOProtos\Map\Fort\FortLureInfo $value = null)
    {
        $this->lure_info = $value;
    }

    /**
     * Check if 'cooldown_complete_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasCooldownCompleteTimestampMs()
    {
        return $this->cooldown_complete_timestamp_ms !== null;
    }

    /**
     * Get 'cooldown_complete_timestamp_ms' value
     *
     * @return int
     */
    public function getCooldownCompleteTimestampMs()
    {
        return $this->cooldown_complete_timestamp_ms;
    }

    /**
     * Set 'cooldown_complete_timestamp_ms' value
     *
     * @param int $value
     */
    public function setCooldownCompleteTimestampMs($value = null)
    {
        $this->cooldown_complete_timestamp_ms = $value;
    }

    /**
     * Check if 'sponsor' has a value
     *
     * @return bool
     */
    public function hasSponsor()
    {
        return $this->sponsor !== null;
    }

    /**
     * Get 'sponsor' value
     *
     * @return \POGOProtos\Map\Fort\FortSponsor
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * Set 'sponsor' value
     *
     * @param \POGOProtos\Map\Fort\FortSponsor $value
     */
    public function setSponsor(\POGOProtos\Map\Fort\FortSponsor $value = null)
    {
        $this->sponsor = $value;
    }

    /**
     * Check if 'rendering_type' has a value
     *
     * @return bool
     */
    public function hasRenderingType()
    {
        return $this->rendering_type !== null;
    }

    /**
     * Get 'rendering_type' value
     *
     * @return \POGOProtos\Map\Fort\FortRenderingType
     */
    public function getRenderingType()
    {
        return $this->rendering_type;
    }

    /**
     * Set 'rendering_type' value
     *
     * @param \POGOProtos\Map\Fort\FortRenderingType $value
     */
    public function setRenderingType(\POGOProtos\Map\Fort\FortRenderingType $value = null)
    {
        $this->rendering_type = $value;
    }

    /**
     * Check if 'deploy_lockout_end_ms' has a value
     *
     * @return bool
     */
    public function hasDeployLockoutEndMs()
    {
        return $this->deploy_lockout_end_ms !== null;
    }

    /**
     * Get 'deploy_lockout_end_ms' value
     *
     * @return int
     */
    public function getDeployLockoutEndMs()
    {
        return $this->deploy_lockout_end_ms;
    }

    /**
     * Set 'deploy_lockout_end_ms' value
     *
     * @param int $value
     */
    public function setDeployLockoutEndMs($value = null)
    {
        $this->deploy_lockout_end_ms = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'id' => null,
            'last_modified_timestamp_ms' => null,
            'latitude' => null,
            'longitude' => null,
            'owned_by_team' => null,
            'guard_pokemon_id' => null,
            'guard_pokemon_cp' => null,
            'enabled' => null,
            'type' => null,
            'gym_points' => null,
            'is_in_battle' => null,
            'active_fort_modifier' => [],
            'lure_info' => null,
            'cooldown_complete_timestamp_ms' => null,
            'sponsor' => null,
            'rendering_type' => null,
            'deploy_lockout_end_ms' => null
        ], $values);

        $message->setId($values['id']);
        $message->setLastModifiedTimestampMs($values['last_modified_timestamp_ms']);
        $message->setLatitude($values['latitude']);
        $message->setLongitude($values['longitude']);
        $message->setOwnedByTeam($values['owned_by_team']);
        $message->setGuardPokemonId($values['guard_pokemon_id']);
        $message->setGuardPokemonCp($values['guard_pokemon_cp']);
        $message->setEnabled($values['enabled']);
        $message->setType($values['type']);
        $message->setGymPoints($values['gym_points']);
        $message->setIsInBattle($values['is_in_battle']);
        $message->setLureInfo($values['lure_info']);
        $message->setCooldownCompleteTimestampMs($values['cooldown_complete_timestamp_ms']);
        $message->setSponsor($values['sponsor']);
        $message->setRenderingType($values['rendering_type']);
        $message->setDeployLockoutEndMs($values['deploy_lockout_end_ms']);

        foreach ($values['active_fort_modifier'] as $item) {
            $message->addActiveFortModifier($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'FortData',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'last_modified_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'longitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'owned_by_team',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.TeamColor'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'guard_pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.PokemonId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'guard_pokemon_cp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'enabled',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Map.Fort.FortType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'gym_points',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'is_in_battle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'active_fort_modifier',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Inventory.Item.ItemId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'lure_info',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Map.Fort.FortLureInfo'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'cooldown_complete_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'sponsor',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Map.Fort.FortSponsor'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 16,
                    'name' => 'rendering_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Map.Fort.FortRenderingType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 17,
                    'name' => 'deploy_lockout_end_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->id);
        }

        if ($this->last_modified_timestamp_ms !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->last_modified_timestamp_ms);
        }

        if ($this->latitude !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeDouble($stream, $this->latitude);
        }

        if ($this->longitude !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeDouble($stream, $this->longitude);
        }

        if ($this->owned_by_team !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->owned_by_team->value());
        }

        if ($this->guard_pokemon_id !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->guard_pokemon_id->value());
        }

        if ($this->guard_pokemon_cp !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->guard_pokemon_cp);
        }

        if ($this->enabled !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeBool($stream, $this->enabled);
        }

        if ($this->type !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->type->value());
        }

        if ($this->gym_points !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->gym_points);
        }

        if ($this->is_in_battle !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeBool($stream, $this->is_in_battle);
        }

        if ($this->active_fort_modifier !== null) {
            foreach ($this->active_fort_modifier as $val) {
                $writer->writeVarint($stream, 96);
                $writer->writeVarint($stream, $val->value());
            }
        }

        if ($this->lure_info !== null) {
            $writer->writeVarint($stream, 106);
            $writer->writeVarint($stream, $this->lure_info->serializedSize($sizeContext));
            $this->lure_info->writeTo($context);
        }

        if ($this->cooldown_complete_timestamp_ms !== null) {
            $writer->writeVarint($stream, 112);
            $writer->writeVarint($stream, $this->cooldown_complete_timestamp_ms);
        }

        if ($this->sponsor !== null) {
            $writer->writeVarint($stream, 120);
            $writer->writeVarint($stream, $this->sponsor->value());
        }

        if ($this->rendering_type !== null) {
            $writer->writeVarint($stream, 128);
            $writer->writeVarint($stream, $this->rendering_type->value());
        }

        if ($this->deploy_lockout_end_ms !== null) {
            $writer->writeVarint($stream, 136);
            $writer->writeVarint($stream, $this->deploy_lockout_end_ms);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->id = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->last_modified_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->latitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->longitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->owned_by_team = \POGOProtos\Enums\TeamColor::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->guard_pokemon_id = \POGOProtos\Enums\PokemonId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->guard_pokemon_cp = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->enabled = $reader->readBool($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->type = \POGOProtos\Map\Fort\FortType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->gym_points = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_in_battle = $reader->readBool($stream);

                continue;
            }

            if ($tag === 12) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->active_fort_modifier === null) {
                    $this->active_fort_modifier = new \Protobuf\EnumCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->active_fort_modifier->add(\POGOProtos\Inventory\Item\ItemId::valueOf($reader->readVarint($stream)));
                }

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Map\Fort\FortLureInfo();

                $this->lure_info = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->cooldown_complete_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->sponsor = \POGOProtos\Map\Fort\FortSponsor::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 16) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->rendering_type = \POGOProtos\Map\Fort\FortRenderingType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 17) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->deploy_lockout_end_ms = $reader->readVarint($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->id);
        }

        if ($this->last_modified_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->last_modified_timestamp_ms);
        }

        if ($this->latitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->longitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->owned_by_team !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->owned_by_team->value());
        }

        if ($this->guard_pokemon_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->guard_pokemon_id->value());
        }

        if ($this->guard_pokemon_cp !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->guard_pokemon_cp);
        }

        if ($this->enabled !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->type->value());
        }

        if ($this->gym_points !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->gym_points);
        }

        if ($this->is_in_battle !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->active_fort_modifier !== null) {
            foreach ($this->active_fort_modifier as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val->value());
            }
        }

        if ($this->lure_info !== null) {
            $innerSize = $this->lure_info->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->cooldown_complete_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->cooldown_complete_timestamp_ms);
        }

        if ($this->sponsor !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->sponsor->value());
        }

        if ($this->rendering_type !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->rendering_type->value());
        }

        if ($this->deploy_lockout_end_ms !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->deploy_lockout_end_ms);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->id = null;
        $this->last_modified_timestamp_ms = null;
        $this->latitude = null;
        $this->longitude = null;
        $this->owned_by_team = null;
        $this->guard_pokemon_id = null;
        $this->guard_pokemon_cp = null;
        $this->enabled = null;
        $this->type = null;
        $this->gym_points = null;
        $this->is_in_battle = null;
        $this->active_fort_modifier = null;
        $this->lure_info = null;
        $this->cooldown_complete_timestamp_ms = null;
        $this->sponsor = null;
        $this->rendering_type = null;
        $this->deploy_lockout_end_ms = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Map\Fort\FortData) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->last_modified_timestamp_ms = ($message->last_modified_timestamp_ms !== null) ? $message->last_modified_timestamp_ms : $this->last_modified_timestamp_ms;
        $this->latitude = ($message->latitude !== null) ? $message->latitude : $this->latitude;
        $this->longitude = ($message->longitude !== null) ? $message->longitude : $this->longitude;
        $this->owned_by_team = ($message->owned_by_team !== null) ? $message->owned_by_team : $this->owned_by_team;
        $this->guard_pokemon_id = ($message->guard_pokemon_id !== null) ? $message->guard_pokemon_id : $this->guard_pokemon_id;
        $this->guard_pokemon_cp = ($message->guard_pokemon_cp !== null) ? $message->guard_pokemon_cp : $this->guard_pokemon_cp;
        $this->enabled = ($message->enabled !== null) ? $message->enabled : $this->enabled;
        $this->type = ($message->type !== null) ? $message->type : $this->type;
        $this->gym_points = ($message->gym_points !== null) ? $message->gym_points : $this->gym_points;
        $this->is_in_battle = ($message->is_in_battle !== null) ? $message->is_in_battle : $this->is_in_battle;
        $this->active_fort_modifier = ($message->active_fort_modifier !== null) ? $message->active_fort_modifier : $this->active_fort_modifier;
        $this->lure_info = ($message->lure_info !== null) ? $message->lure_info : $this->lure_info;
        $this->cooldown_complete_timestamp_ms = ($message->cooldown_complete_timestamp_ms !== null) ? $message->cooldown_complete_timestamp_ms : $this->cooldown_complete_timestamp_ms;
        $this->sponsor = ($message->sponsor !== null) ? $message->sponsor : $this->sponsor;
        $this->rendering_type = ($message->rendering_type !== null) ? $message->rendering_type : $this->rendering_type;
        $this->deploy_lockout_end_ms = ($message->deploy_lockout_end_ms !== null) ? $message->deploy_lockout_end_ms : $this->deploy_lockout_end_ms;
    }


}

