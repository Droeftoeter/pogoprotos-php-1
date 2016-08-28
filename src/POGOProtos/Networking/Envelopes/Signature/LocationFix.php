<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Envelopes/Signature.proto
 */


namespace POGOProtos\Networking\Envelopes\Signature;

/**
 * Protobuf message : POGOProtos.Networking.Envelopes.Signature.LocationFix
 */
class LocationFix extends \Protobuf\AbstractMessage
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
     * provider optional string = 1
     *
     * @var string
     */
    protected $provider = null;

    /**
     * timestamp_snapshot optional uint64 = 2
     *
     * @var int
     */
    protected $timestamp_snapshot = null;

    /**
     * altitude optional float = 4
     *
     * @var float
     */
    protected $altitude = null;

    /**
     * latitude optional float = 13
     *
     * @var float
     */
    protected $latitude = null;

    /**
     * longitude optional float = 14
     *
     * @var float
     */
    protected $longitude = null;

    /**
     * speed optional float = 18
     *
     * @var float
     */
    protected $speed = null;

    /**
     * course optional float = 20
     *
     * @var float
     */
    protected $course = null;

    /**
     * horizontal_accuracy optional float = 21
     *
     * @var float
     */
    protected $horizontal_accuracy = null;

    /**
     * vertical_accuracy optional float = 22
     *
     * @var float
     */
    protected $vertical_accuracy = null;

    /**
     * provider_status optional uint64 = 26
     *
     * @var int
     */
    protected $provider_status = null;

    /**
     * floor optional uint32 = 27
     *
     * @var int
     */
    protected $floor = null;

    /**
     * location_type optional uint64 = 28
     *
     * @var int
     */
    protected $location_type = null;

    /**
     * Check if 'provider' has a value
     *
     * @return bool
     */
    public function hasProvider()
    {
        return $this->provider !== null;
    }

    /**
     * Get 'provider' value
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set 'provider' value
     *
     * @param string $value
     */
    public function setProvider($value = null)
    {
        $this->provider = $value;
    }

    /**
     * Check if 'timestamp_snapshot' has a value
     *
     * @return bool
     */
    public function hasTimestampSnapshot()
    {
        return $this->timestamp_snapshot !== null;
    }

    /**
     * Get 'timestamp_snapshot' value
     *
     * @return int
     */
    public function getTimestampSnapshot()
    {
        return $this->timestamp_snapshot;
    }

    /**
     * Set 'timestamp_snapshot' value
     *
     * @param int $value
     */
    public function setTimestampSnapshot($value = null)
    {
        $this->timestamp_snapshot = $value;
    }

    /**
     * Check if 'altitude' has a value
     *
     * @return bool
     */
    public function hasAltitude()
    {
        return $this->altitude !== null;
    }

    /**
     * Get 'altitude' value
     *
     * @return float
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set 'altitude' value
     *
     * @param float $value
     */
    public function setAltitude($value = null)
    {
        $this->altitude = $value;
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
     * Check if 'speed' has a value
     *
     * @return bool
     */
    public function hasSpeed()
    {
        return $this->speed !== null;
    }

    /**
     * Get 'speed' value
     *
     * @return float
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set 'speed' value
     *
     * @param float $value
     */
    public function setSpeed($value = null)
    {
        $this->speed = $value;
    }

    /**
     * Check if 'course' has a value
     *
     * @return bool
     */
    public function hasCourse()
    {
        return $this->course !== null;
    }

    /**
     * Get 'course' value
     *
     * @return float
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set 'course' value
     *
     * @param float $value
     */
    public function setCourse($value = null)
    {
        $this->course = $value;
    }

    /**
     * Check if 'horizontal_accuracy' has a value
     *
     * @return bool
     */
    public function hasHorizontalAccuracy()
    {
        return $this->horizontal_accuracy !== null;
    }

    /**
     * Get 'horizontal_accuracy' value
     *
     * @return float
     */
    public function getHorizontalAccuracy()
    {
        return $this->horizontal_accuracy;
    }

    /**
     * Set 'horizontal_accuracy' value
     *
     * @param float $value
     */
    public function setHorizontalAccuracy($value = null)
    {
        $this->horizontal_accuracy = $value;
    }

    /**
     * Check if 'vertical_accuracy' has a value
     *
     * @return bool
     */
    public function hasVerticalAccuracy()
    {
        return $this->vertical_accuracy !== null;
    }

    /**
     * Get 'vertical_accuracy' value
     *
     * @return float
     */
    public function getVerticalAccuracy()
    {
        return $this->vertical_accuracy;
    }

    /**
     * Set 'vertical_accuracy' value
     *
     * @param float $value
     */
    public function setVerticalAccuracy($value = null)
    {
        $this->vertical_accuracy = $value;
    }

    /**
     * Check if 'provider_status' has a value
     *
     * @return bool
     */
    public function hasProviderStatus()
    {
        return $this->provider_status !== null;
    }

    /**
     * Get 'provider_status' value
     *
     * @return int
     */
    public function getProviderStatus()
    {
        return $this->provider_status;
    }

    /**
     * Set 'provider_status' value
     *
     * @param int $value
     */
    public function setProviderStatus($value = null)
    {
        $this->provider_status = $value;
    }

    /**
     * Check if 'floor' has a value
     *
     * @return bool
     */
    public function hasFloor()
    {
        return $this->floor !== null;
    }

    /**
     * Get 'floor' value
     *
     * @return int
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set 'floor' value
     *
     * @param int $value
     */
    public function setFloor($value = null)
    {
        $this->floor = $value;
    }

    /**
     * Check if 'location_type' has a value
     *
     * @return bool
     */
    public function hasLocationType()
    {
        return $this->location_type !== null;
    }

    /**
     * Get 'location_type' value
     *
     * @return int
     */
    public function getLocationType()
    {
        return $this->location_type;
    }

    /**
     * Set 'location_type' value
     *
     * @param int $value
     */
    public function setLocationType($value = null)
    {
        $this->location_type = $value;
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
            'provider' => null,
            'timestamp_snapshot' => null,
            'altitude' => null,
            'latitude' => null,
            'longitude' => null,
            'speed' => null,
            'course' => null,
            'horizontal_accuracy' => null,
            'vertical_accuracy' => null,
            'provider_status' => null,
            'floor' => null,
            'location_type' => null
        ], $values);

        $message->setProvider($values['provider']);
        $message->setTimestampSnapshot($values['timestamp_snapshot']);
        $message->setAltitude($values['altitude']);
        $message->setLatitude($values['latitude']);
        $message->setLongitude($values['longitude']);
        $message->setSpeed($values['speed']);
        $message->setCourse($values['course']);
        $message->setHorizontalAccuracy($values['horizontal_accuracy']);
        $message->setVerticalAccuracy($values['vertical_accuracy']);
        $message->setProviderStatus($values['provider_status']);
        $message->setFloor($values['floor']);
        $message->setLocationType($values['location_type']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'LocationFix',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'provider',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'timestamp_snapshot',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'altitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'longitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 18,
                    'name' => 'speed',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 20,
                    'name' => 'course',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 21,
                    'name' => 'horizontal_accuracy',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 22,
                    'name' => 'vertical_accuracy',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 26,
                    'name' => 'provider_status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 27,
                    'name' => 'floor',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 28,
                    'name' => 'location_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
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

        if ($this->provider !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->provider);
        }

        if ($this->timestamp_snapshot !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->timestamp_snapshot);
        }

        if ($this->altitude !== null) {
            $writer->writeVarint($stream, 37);
            $writer->writeFloat($stream, $this->altitude);
        }

        if ($this->latitude !== null) {
            $writer->writeVarint($stream, 109);
            $writer->writeFloat($stream, $this->latitude);
        }

        if ($this->longitude !== null) {
            $writer->writeVarint($stream, 117);
            $writer->writeFloat($stream, $this->longitude);
        }

        if ($this->speed !== null) {
            $writer->writeVarint($stream, 149);
            $writer->writeFloat($stream, $this->speed);
        }

        if ($this->course !== null) {
            $writer->writeVarint($stream, 165);
            $writer->writeFloat($stream, $this->course);
        }

        if ($this->horizontal_accuracy !== null) {
            $writer->writeVarint($stream, 173);
            $writer->writeFloat($stream, $this->horizontal_accuracy);
        }

        if ($this->vertical_accuracy !== null) {
            $writer->writeVarint($stream, 181);
            $writer->writeFloat($stream, $this->vertical_accuracy);
        }

        if ($this->provider_status !== null) {
            $writer->writeVarint($stream, 208);
            $writer->writeVarint($stream, $this->provider_status);
        }

        if ($this->floor !== null) {
            $writer->writeVarint($stream, 216);
            $writer->writeVarint($stream, $this->floor);
        }

        if ($this->location_type !== null) {
            $writer->writeVarint($stream, 224);
            $writer->writeVarint($stream, $this->location_type);
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

                $this->provider = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->timestamp_snapshot = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->altitude = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->latitude = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->longitude = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 18) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->speed = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 20) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->course = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 21) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->horizontal_accuracy = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 22) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->vertical_accuracy = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 26) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->provider_status = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 27) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->floor = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 28) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->location_type = $reader->readVarint($stream);

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

        if ($this->provider !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->provider);
        }

        if ($this->timestamp_snapshot !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->timestamp_snapshot);
        }

        if ($this->altitude !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->latitude !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->longitude !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->speed !== null) {
            $size += 2;
            $size += 4;
        }

        if ($this->course !== null) {
            $size += 2;
            $size += 4;
        }

        if ($this->horizontal_accuracy !== null) {
            $size += 2;
            $size += 4;
        }

        if ($this->vertical_accuracy !== null) {
            $size += 2;
            $size += 4;
        }

        if ($this->provider_status !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->provider_status);
        }

        if ($this->floor !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->floor);
        }

        if ($this->location_type !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->location_type);
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
        $this->provider = null;
        $this->timestamp_snapshot = null;
        $this->altitude = null;
        $this->latitude = null;
        $this->longitude = null;
        $this->speed = null;
        $this->course = null;
        $this->horizontal_accuracy = null;
        $this->vertical_accuracy = null;
        $this->provider_status = null;
        $this->floor = null;
        $this->location_type = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Envelopes\Signature\LocationFix) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->provider = ($message->provider !== null) ? $message->provider : $this->provider;
        $this->timestamp_snapshot = ($message->timestamp_snapshot !== null) ? $message->timestamp_snapshot : $this->timestamp_snapshot;
        $this->altitude = ($message->altitude !== null) ? $message->altitude : $this->altitude;
        $this->latitude = ($message->latitude !== null) ? $message->latitude : $this->latitude;
        $this->longitude = ($message->longitude !== null) ? $message->longitude : $this->longitude;
        $this->speed = ($message->speed !== null) ? $message->speed : $this->speed;
        $this->course = ($message->course !== null) ? $message->course : $this->course;
        $this->horizontal_accuracy = ($message->horizontal_accuracy !== null) ? $message->horizontal_accuracy : $this->horizontal_accuracy;
        $this->vertical_accuracy = ($message->vertical_accuracy !== null) ? $message->vertical_accuracy : $this->vertical_accuracy;
        $this->provider_status = ($message->provider_status !== null) ? $message->provider_status : $this->provider_status;
        $this->floor = ($message->floor !== null) ? $message->floor : $this->floor;
        $this->location_type = ($message->location_type !== null) ? $message->location_type : $this->location_type;
    }


}

