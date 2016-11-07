<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Requests/Messages/AttackGymMessage.proto
 */


namespace POGOProtos\Networking\Requests\Messages;

/**
 * Protobuf message : POGOProtos.Networking.Requests.Messages.AttackGymMessage
 */
class AttackGymMessage extends \Protobuf\AbstractMessage
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
     * gym_id optional string = 1
     *
     * @var string
     */
    protected $gym_id = null;

    /**
     * battle_id optional string = 2
     *
     * @var string
     */
    protected $battle_id = null;

    /**
     * attack_actions repeated message = 3
     *
     * @var \Protobuf\Collection<\POGOProtos\Data\Battle\BattleAction>
     */
    protected $attack_actions = null;

    /**
     * last_retrieved_action optional message = 4
     *
     * @var \POGOProtos\Data\Battle\BattleAction
     */
    protected $last_retrieved_action = null;

    /**
     * player_latitude optional double = 5
     *
     * @var float
     */
    protected $player_latitude = null;

    /**
     * player_longitude optional double = 6
     *
     * @var float
     */
    protected $player_longitude = null;

    /**
     * Check if 'gym_id' has a value
     *
     * @return bool
     */
    public function hasGymId()
    {
        return $this->gym_id !== null;
    }

    /**
     * Get 'gym_id' value
     *
     * @return string
     */
    public function getGymId()
    {
        return $this->gym_id;
    }

    /**
     * Set 'gym_id' value
     *
     * @param string $value
     */
    public function setGymId($value = null)
    {
        $this->gym_id = $value;
    }

    /**
     * Check if 'battle_id' has a value
     *
     * @return bool
     */
    public function hasBattleId()
    {
        return $this->battle_id !== null;
    }

    /**
     * Get 'battle_id' value
     *
     * @return string
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * Set 'battle_id' value
     *
     * @param string $value
     */
    public function setBattleId($value = null)
    {
        $this->battle_id = $value;
    }

    /**
     * Check if 'attack_actions' has a value
     *
     * @return bool
     */
    public function hasAttackActionsList()
    {
        return $this->attack_actions !== null;
    }

    /**
     * Get 'attack_actions' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Data\Battle\BattleAction>
     */
    public function getAttackActionsList()
    {
        return $this->attack_actions;
    }

    /**
     * Set 'attack_actions' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Data\Battle\BattleAction> $value
     */
    public function setAttackActionsList(\Protobuf\Collection $value = null)
    {
        $this->attack_actions = $value;
    }

    /**
     * Add a new element to 'attack_actions'
     *
     * @param \POGOProtos\Data\Battle\BattleAction $value
     */
    public function addAttackActions(\POGOProtos\Data\Battle\BattleAction $value)
    {
        if ($this->attack_actions === null) {
            $this->attack_actions = new \Protobuf\MessageCollection();
        }

        $this->attack_actions->add($value);
    }

    /**
     * Check if 'last_retrieved_action' has a value
     *
     * @return bool
     */
    public function hasLastRetrievedAction()
    {
        return $this->last_retrieved_action !== null;
    }

    /**
     * Get 'last_retrieved_action' value
     *
     * @return \POGOProtos\Data\Battle\BattleAction
     */
    public function getLastRetrievedAction()
    {
        return $this->last_retrieved_action;
    }

    /**
     * Set 'last_retrieved_action' value
     *
     * @param \POGOProtos\Data\Battle\BattleAction $value
     */
    public function setLastRetrievedAction(\POGOProtos\Data\Battle\BattleAction $value = null)
    {
        $this->last_retrieved_action = $value;
    }

    /**
     * Check if 'player_latitude' has a value
     *
     * @return bool
     */
    public function hasPlayerLatitude()
    {
        return $this->player_latitude !== null;
    }

    /**
     * Get 'player_latitude' value
     *
     * @return float
     */
    public function getPlayerLatitude()
    {
        return $this->player_latitude;
    }

    /**
     * Set 'player_latitude' value
     *
     * @param float $value
     */
    public function setPlayerLatitude($value = null)
    {
        $this->player_latitude = $value;
    }

    /**
     * Check if 'player_longitude' has a value
     *
     * @return bool
     */
    public function hasPlayerLongitude()
    {
        return $this->player_longitude !== null;
    }

    /**
     * Get 'player_longitude' value
     *
     * @return float
     */
    public function getPlayerLongitude()
    {
        return $this->player_longitude;
    }

    /**
     * Set 'player_longitude' value
     *
     * @param float $value
     */
    public function setPlayerLongitude($value = null)
    {
        $this->player_longitude = $value;
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
            'gym_id' => null,
            'battle_id' => null,
            'attack_actions' => [],
            'last_retrieved_action' => null,
            'player_latitude' => null,
            'player_longitude' => null
        ], $values);

        $message->setGymId($values['gym_id']);
        $message->setBattleId($values['battle_id']);
        $message->setLastRetrievedAction($values['last_retrieved_action']);
        $message->setPlayerLatitude($values['player_latitude']);
        $message->setPlayerLongitude($values['player_longitude']);

        foreach ($values['attack_actions'] as $item) {
            $message->addAttackActions($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'AttackGymMessage',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'gym_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'battle_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'attack_actions',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Data.Battle.BattleAction'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'last_retrieved_action',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Battle.BattleAction'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'player_latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'player_longitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
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

        if ($this->gym_id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->gym_id);
        }

        if ($this->battle_id !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->battle_id);
        }

        if ($this->attack_actions !== null) {
            foreach ($this->attack_actions as $val) {
                $writer->writeVarint($stream, 26);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->last_retrieved_action !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->last_retrieved_action->serializedSize($sizeContext));
            $this->last_retrieved_action->writeTo($context);
        }

        if ($this->player_latitude !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeDouble($stream, $this->player_latitude);
        }

        if ($this->player_longitude !== null) {
            $writer->writeVarint($stream, 49);
            $writer->writeDouble($stream, $this->player_longitude);
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

                $this->gym_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->battle_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Battle\BattleAction();

                if ($this->attack_actions === null) {
                    $this->attack_actions = new \Protobuf\MessageCollection();
                }

                $this->attack_actions->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Battle\BattleAction();

                $this->last_retrieved_action = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->player_latitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->player_longitude = $reader->readDouble($stream);

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

        if ($this->gym_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->gym_id);
        }

        if ($this->battle_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->battle_id);
        }

        if ($this->attack_actions !== null) {
            foreach ($this->attack_actions as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->last_retrieved_action !== null) {
            $innerSize = $this->last_retrieved_action->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->player_latitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->player_longitude !== null) {
            $size += 1;
            $size += 8;
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
        $this->gym_id = null;
        $this->battle_id = null;
        $this->attack_actions = null;
        $this->last_retrieved_action = null;
        $this->player_latitude = null;
        $this->player_longitude = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Requests\Messages\AttackGymMessage) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->gym_id = ($message->gym_id !== null) ? $message->gym_id : $this->gym_id;
        $this->battle_id = ($message->battle_id !== null) ? $message->battle_id : $this->battle_id;
        $this->attack_actions = ($message->attack_actions !== null) ? $message->attack_actions : $this->attack_actions;
        $this->last_retrieved_action = ($message->last_retrieved_action !== null) ? $message->last_retrieved_action : $this->last_retrieved_action;
        $this->player_latitude = ($message->player_latitude !== null) ? $message->player_latitude : $this->player_latitude;
        $this->player_longitude = ($message->player_longitude !== null) ? $message->player_longitude : $this->player_longitude;
    }


}

