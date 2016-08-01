<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Player/DailyBonus.proto
 */


namespace POGOProtos\Data\Player;

/**
 * Protobuf message : POGOProtos.Data.Player.DailyBonus
 */
class DailyBonus extends \Protobuf\AbstractMessage
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
     * next_collected_timestamp_ms optional int64 = 1
     *
     * @var int
     */
    protected $next_collected_timestamp_ms = null;

    /**
     * next_defender_bonus_collect_timestamp_ms optional int64 = 2
     *
     * @var int
     */
    protected $next_defender_bonus_collect_timestamp_ms = null;

    /**
     * Check if 'next_collected_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasNextCollectedTimestampMs()
    {
        return $this->next_collected_timestamp_ms !== null;
    }

    /**
     * Get 'next_collected_timestamp_ms' value
     *
     * @return int
     */
    public function getNextCollectedTimestampMs()
    {
        return $this->next_collected_timestamp_ms;
    }

    /**
     * Set 'next_collected_timestamp_ms' value
     *
     * @param int $value
     */
    public function setNextCollectedTimestampMs($value = null)
    {
        $this->next_collected_timestamp_ms = $value;
    }

    /**
     * Check if 'next_defender_bonus_collect_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasNextDefenderBonusCollectTimestampMs()
    {
        return $this->next_defender_bonus_collect_timestamp_ms !== null;
    }

    /**
     * Get 'next_defender_bonus_collect_timestamp_ms' value
     *
     * @return int
     */
    public function getNextDefenderBonusCollectTimestampMs()
    {
        return $this->next_defender_bonus_collect_timestamp_ms;
    }

    /**
     * Set 'next_defender_bonus_collect_timestamp_ms' value
     *
     * @param int $value
     */
    public function setNextDefenderBonusCollectTimestampMs($value = null)
    {
        $this->next_defender_bonus_collect_timestamp_ms = $value;
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
            'next_collected_timestamp_ms' => null,
            'next_defender_bonus_collect_timestamp_ms' => null
        ], $values);

        $message->setNextCollectedTimestampMs($values['next_collected_timestamp_ms']);
        $message->setNextDefenderBonusCollectTimestampMs($values['next_defender_bonus_collect_timestamp_ms']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DailyBonus',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'next_collected_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'next_defender_bonus_collect_timestamp_ms',
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

        if ($this->next_collected_timestamp_ms !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->next_collected_timestamp_ms);
        }

        if ($this->next_defender_bonus_collect_timestamp_ms !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->next_defender_bonus_collect_timestamp_ms);
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
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->next_collected_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->next_defender_bonus_collect_timestamp_ms = $reader->readVarint($stream);

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

        if ($this->next_collected_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->next_collected_timestamp_ms);
        }

        if ($this->next_defender_bonus_collect_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->next_defender_bonus_collect_timestamp_ms);
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
        $this->next_collected_timestamp_ms = null;
        $this->next_defender_bonus_collect_timestamp_ms = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Player\DailyBonus) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->next_collected_timestamp_ms = ($message->next_collected_timestamp_ms !== null) ? $message->next_collected_timestamp_ms : $this->next_collected_timestamp_ms;
        $this->next_defender_bonus_collect_timestamp_ms = ($message->next_defender_bonus_collect_timestamp_ms !== null) ? $message->next_defender_bonus_collect_timestamp_ms : $this->next_defender_bonus_collect_timestamp_ms;
    }


}
