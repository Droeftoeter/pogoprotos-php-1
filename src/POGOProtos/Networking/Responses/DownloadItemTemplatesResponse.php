<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Responses/DownloadItemTemplatesResponse.proto
 */


namespace POGOProtos\Networking\Responses;

/**
 * Protobuf message : POGOProtos.Networking.Responses.DownloadItemTemplatesResponse
 */
class DownloadItemTemplatesResponse extends \Protobuf\AbstractMessage
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
     * result optional enum = 1
     *
     * @var \POGOProtos\Networking\Responses\DownloadItemTemplatesResponse\Result
     */
    protected $result = null;

    /**
     * item_templates repeated message = 2
     *
     * @var \Protobuf\Collection<\POGOProtos\Networking\Responses\DownloadItemTemplatesResponse\ItemTemplate>
     */
    protected $item_templates = null;

    /**
     * timestamp_ms optional uint64 = 3
     *
     * @var int
     */
    protected $timestamp_ms = null;

    /**
     * page_offset optional int32 = 4
     *
     * @var int
     */
    protected $page_offset = null;

    /**
     * Check if 'result' has a value
     *
     * @return bool
     */
    public function hasResult()
    {
        return $this->result !== null;
    }

    /**
     * Get 'result' value
     *
     * @return \POGOProtos\Networking\Responses\DownloadItemTemplatesResponse\Result
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set 'result' value
     *
     * @param \POGOProtos\Networking\Responses\DownloadItemTemplatesResponse\Result $value
     */
    public function setResult(\POGOProtos\Networking\Responses\DownloadItemTemplatesResponse\Result $value = null)
    {
        $this->result = $value;
    }

    /**
     * Check if 'item_templates' has a value
     *
     * @return bool
     */
    public function hasItemTemplatesList()
    {
        return $this->item_templates !== null;
    }

    /**
     * Get 'item_templates' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Networking\Responses\DownloadItemTemplatesResponse\ItemTemplate>
     */
    public function getItemTemplatesList()
    {
        return $this->item_templates;
    }

    /**
     * Set 'item_templates' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Networking\Responses\DownloadItemTemplatesResponse\ItemTemplate> $value
     */
    public function setItemTemplatesList(\Protobuf\Collection $value = null)
    {
        $this->item_templates = $value;
    }

    /**
     * Add a new element to 'item_templates'
     *
     * @param
     * \POGOProtos\Networking\Responses\DownloadItemTemplatesResponse\ItemTemplate
     * $value
     */
    public function addItemTemplates(\POGOProtos\Networking\Responses\DownloadItemTemplatesResponse\ItemTemplate $value)
    {
        if ($this->item_templates === null) {
            $this->item_templates = new \Protobuf\MessageCollection();
        }

        $this->item_templates->add($value);
    }

    /**
     * Check if 'timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasTimestampMs()
    {
        return $this->timestamp_ms !== null;
    }

    /**
     * Get 'timestamp_ms' value
     *
     * @return int
     */
    public function getTimestampMs()
    {
        return $this->timestamp_ms;
    }

    /**
     * Set 'timestamp_ms' value
     *
     * @param int $value
     */
    public function setTimestampMs($value = null)
    {
        $this->timestamp_ms = $value;
    }

    /**
     * Check if 'page_offset' has a value
     *
     * @return bool
     */
    public function hasPageOffset()
    {
        return $this->page_offset !== null;
    }

    /**
     * Get 'page_offset' value
     *
     * @return int
     */
    public function getPageOffset()
    {
        return $this->page_offset;
    }

    /**
     * Set 'page_offset' value
     *
     * @param int $value
     */
    public function setPageOffset($value = null)
    {
        $this->page_offset = $value;
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
            'result' => null,
            'item_templates' => [],
            'timestamp_ms' => null,
            'page_offset' => null
        ], $values);

        $message->setResult($values['result']);
        $message->setTimestampMs($values['timestamp_ms']);
        $message->setPageOffset($values['page_offset']);

        foreach ($values['item_templates'] as $item) {
            $message->addItemTemplates($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DownloadItemTemplatesResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'result',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Responses.DownloadItemTemplatesResponse.Result'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'item_templates',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Networking.Responses.DownloadItemTemplatesResponse.ItemTemplate'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'page_offset',
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

        if ($this->result !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->result->value());
        }

        if ($this->item_templates !== null) {
            foreach ($this->item_templates as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->timestamp_ms !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->timestamp_ms);
        }

        if ($this->page_offset !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->page_offset);
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

                $this->result = \POGOProtos\Networking\Responses\DownloadItemTemplatesResponse\Result::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Networking\Responses\DownloadItemTemplatesResponse\ItemTemplate();

                if ($this->item_templates === null) {
                    $this->item_templates = new \Protobuf\MessageCollection();
                }

                $this->item_templates->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->page_offset = $reader->readVarint($stream);

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

        if ($this->result !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->result->value());
        }

        if ($this->item_templates !== null) {
            foreach ($this->item_templates as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->timestamp_ms);
        }

        if ($this->page_offset !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->page_offset);
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
        $this->result = null;
        $this->item_templates = null;
        $this->timestamp_ms = null;
        $this->page_offset = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Responses\DownloadItemTemplatesResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->result = ($message->result !== null) ? $message->result : $this->result;
        $this->item_templates = ($message->item_templates !== null) ? $message->item_templates : $this->item_templates;
        $this->timestamp_ms = ($message->timestamp_ms !== null) ? $message->timestamp_ms : $this->timestamp_ms;
        $this->page_offset = ($message->page_offset !== null) ? $message->page_offset : $this->page_offset;
    }


}
