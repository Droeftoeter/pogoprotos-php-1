<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Battle/BattlePokemonInfo.proto
 */


namespace POGOProtos\Data\Battle;

/**
 * Protobuf message : POGOProtos.Data.Battle.BattlePokemonInfo
 */
class BattlePokemonInfo extends \Protobuf\AbstractMessage
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
     * pokemon_data optional message = 1
     *
     * @var \POGOProtos\Data\PokemonData
     */
    protected $pokemon_data = null;

    /**
     * current_health optional int32 = 2
     *
     * @var int
     */
    protected $current_health = null;

    /**
     * current_energy optional int32 = 3
     *
     * @var int
     */
    protected $current_energy = null;

    /**
     * Check if 'pokemon_data' has a value
     *
     * @return bool
     */
    public function hasPokemonData()
    {
        return $this->pokemon_data !== null;
    }

    /**
     * Get 'pokemon_data' value
     *
     * @return \POGOProtos\Data\PokemonData
     */
    public function getPokemonData()
    {
        return $this->pokemon_data;
    }

    /**
     * Set 'pokemon_data' value
     *
     * @param \POGOProtos\Data\PokemonData $value
     */
    public function setPokemonData(\POGOProtos\Data\PokemonData $value = null)
    {
        $this->pokemon_data = $value;
    }

    /**
     * Check if 'current_health' has a value
     *
     * @return bool
     */
    public function hasCurrentHealth()
    {
        return $this->current_health !== null;
    }

    /**
     * Get 'current_health' value
     *
     * @return int
     */
    public function getCurrentHealth()
    {
        return $this->current_health;
    }

    /**
     * Set 'current_health' value
     *
     * @param int $value
     */
    public function setCurrentHealth($value = null)
    {
        $this->current_health = $value;
    }

    /**
     * Check if 'current_energy' has a value
     *
     * @return bool
     */
    public function hasCurrentEnergy()
    {
        return $this->current_energy !== null;
    }

    /**
     * Get 'current_energy' value
     *
     * @return int
     */
    public function getCurrentEnergy()
    {
        return $this->current_energy;
    }

    /**
     * Set 'current_energy' value
     *
     * @param int $value
     */
    public function setCurrentEnergy($value = null)
    {
        $this->current_energy = $value;
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
            'pokemon_data' => null,
            'current_health' => null,
            'current_energy' => null
        ], $values);

        $message->setPokemonData($values['pokemon_data']);
        $message->setCurrentHealth($values['current_health']);
        $message->setCurrentEnergy($values['current_energy']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'BattlePokemonInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'pokemon_data',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.PokemonData'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'current_health',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'current_energy',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->pokemon_data !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->pokemon_data->serializedSize($sizeContext));
            $this->pokemon_data->writeTo($context);
        }

        if ($this->current_health !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->current_health);
        }

        if ($this->current_energy !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->current_energy);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\PokemonData();

                $this->pokemon_data = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->current_health = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->current_energy = $reader->readVarint($stream);

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

        if ($this->pokemon_data !== null) {
            $innerSize = $this->pokemon_data->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->current_health !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->current_health);
        }

        if ($this->current_energy !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->current_energy);
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
        $this->pokemon_data = null;
        $this->current_health = null;
        $this->current_energy = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Battle\BattlePokemonInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->pokemon_data = ($message->pokemon_data !== null) ? $message->pokemon_data : $this->pokemon_data;
        $this->current_health = ($message->current_health !== null) ? $message->current_health : $this->current_health;
        $this->current_energy = ($message->current_energy !== null) ? $message->current_energy : $this->current_energy;
    }


}

