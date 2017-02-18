<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Settings/Master/GenderSettings.proto
 */


namespace POGOProtos\Settings\Master;

/**
 * Protobuf message : POGOProtos.Settings.Master.GenderSettings
 */
class GenderSettings extends \Protobuf\AbstractMessage
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
     * pokemon optional enum = 1
     *
     * @var \POGOProtos\Enums\PokemonId
     */
    protected $pokemon = null;

    /**
     * gender optional message = 2
     *
     * @var \POGOProtos\Settings\Master\Pokemon\PokemonGenderSettings
     */
    protected $gender = null;

    /**
     * Check if 'pokemon' has a value
     *
     * @return bool
     */
    public function hasPokemon()
    {
        return $this->pokemon !== null;
    }

    /**
     * Get 'pokemon' value
     *
     * @return \POGOProtos\Enums\PokemonId
     */
    public function getPokemon()
    {
        return $this->pokemon;
    }

    /**
     * Set 'pokemon' value
     *
     * @param \POGOProtos\Enums\PokemonId $value
     */
    public function setPokemon(\POGOProtos\Enums\PokemonId $value = null)
    {
        $this->pokemon = $value;
    }

    /**
     * Check if 'gender' has a value
     *
     * @return bool
     */
    public function hasGender()
    {
        return $this->gender !== null;
    }

    /**
     * Get 'gender' value
     *
     * @return \POGOProtos\Settings\Master\Pokemon\PokemonGenderSettings
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set 'gender' value
     *
     * @param \POGOProtos\Settings\Master\Pokemon\PokemonGenderSettings $value
     */
    public function setGender(\POGOProtos\Settings\Master\Pokemon\PokemonGenderSettings $value = null)
    {
        $this->gender = $value;
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
            'pokemon' => null,
            'gender' => null
        ], $values);

        $message->setPokemon($values['pokemon']);
        $message->setGender($values['gender']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GenderSettings',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'pokemon',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.PokemonId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'gender',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Settings.Master.Pokemon.PokemonGenderSettings'
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

        if ($this->pokemon !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->pokemon->value());
        }

        if ($this->gender !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->gender->serializedSize($sizeContext));
            $this->gender->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->pokemon = \POGOProtos\Enums\PokemonId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Settings\Master\Pokemon\PokemonGenderSettings();

                $this->gender = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->pokemon !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pokemon->value());
        }

        if ($this->gender !== null) {
            $innerSize = $this->gender->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->pokemon = null;
        $this->gender = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Settings\Master\GenderSettings) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->pokemon = ($message->pokemon !== null) ? $message->pokemon : $this->pokemon;
        $this->gender = ($message->gender !== null) ? $message->gender : $this->gender;
    }


}
