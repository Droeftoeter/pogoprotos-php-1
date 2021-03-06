<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Avatar/AvatarCustomization.proto
 */


namespace POGOProtos\Data\Avatar;

/**
 * Protobuf message : POGOProtos.Data.Avatar.AvatarCustomization
 */
class AvatarCustomization extends \Protobuf\AbstractMessage
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
     * avatar_template_id optional string = 1
     *
     * @var string
     */
    protected $avatar_template_id = null;

    /**
     * labels repeated enum = 2
     *
     * @var \Protobuf\Collection<\POGOProtos\Data\Avatar\AvatarCustomization\Label>
     */
    protected $labels = null;

    /**
     * Check if 'avatar_template_id' has a value
     *
     * @return bool
     */
    public function hasAvatarTemplateId()
    {
        return $this->avatar_template_id !== null;
    }

    /**
     * Get 'avatar_template_id' value
     *
     * @return string
     */
    public function getAvatarTemplateId()
    {
        return $this->avatar_template_id;
    }

    /**
     * Set 'avatar_template_id' value
     *
     * @param string $value
     */
    public function setAvatarTemplateId($value = null)
    {
        $this->avatar_template_id = $value;
    }

    /**
     * Check if 'labels' has a value
     *
     * @return bool
     */
    public function hasLabelsList()
    {
        return $this->labels !== null;
    }

    /**
     * Get 'labels' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Data\Avatar\AvatarCustomization\Label>
     */
    public function getLabelsList()
    {
        return $this->labels;
    }

    /**
     * Set 'labels' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Data\Avatar\AvatarCustomization\Label> $value
     */
    public function setLabelsList(\Protobuf\Collection $value = null)
    {
        $this->labels = $value;
    }

    /**
     * Add a new element to 'labels'
     *
     * @param \POGOProtos\Data\Avatar\AvatarCustomization\Label $value
     */
    public function addLabels(\POGOProtos\Data\Avatar\AvatarCustomization\Label $value)
    {
        if ($this->labels === null) {
            $this->labels = new \Protobuf\EnumCollection();
        }

        $this->labels->add($value);
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
            'avatar_template_id' => null,
            'labels' => []
        ], $values);

        $message->setAvatarTemplateId($values['avatar_template_id']);

        foreach ($values['labels'] as $item) {
            $message->addLabels($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'AvatarCustomization',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'avatar_template_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'labels',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Data.Avatar.AvatarCustomization.Label'
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

        if ($this->avatar_template_id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->avatar_template_id);
        }

        if ($this->labels !== null) {
            foreach ($this->labels as $val) {
                $writer->writeVarint($stream, 16);
                $writer->writeVarint($stream, $val->value());
            }
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

                $this->avatar_template_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->labels === null) {
                    $this->labels = new \Protobuf\EnumCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->labels->add(\POGOProtos\Data\Avatar\AvatarCustomization\Label::valueOf($reader->readVarint($stream)));
                }

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

        if ($this->avatar_template_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->avatar_template_id);
        }

        if ($this->labels !== null) {
            foreach ($this->labels as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val->value());
            }
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
        $this->avatar_template_id = null;
        $this->labels = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Avatar\AvatarCustomization) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->avatar_template_id = ($message->avatar_template_id !== null) ? $message->avatar_template_id : $this->avatar_template_id;
        $this->labels = ($message->labels !== null) ? $message->labels : $this->labels;
    }


}

