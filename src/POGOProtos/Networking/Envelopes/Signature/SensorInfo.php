<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Envelopes/Signature.proto
 */


namespace POGOProtos\Networking\Envelopes\Signature;

/**
 * Protobuf message : POGOProtos.Networking.Envelopes.Signature.SensorInfo
 */
class SensorInfo extends \Protobuf\AbstractMessage
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
     * timestamp_snapshot optional uint64 = 1
     *
     * @var int
     */
    protected $timestamp_snapshot = null;

    /**
     * linear_acceleration_x optional double = 3
     *
     * @var float
     */
    protected $linear_acceleration_x = null;

    /**
     * linear_acceleration_y optional double = 4
     *
     * @var float
     */
    protected $linear_acceleration_y = null;

    /**
     * linear_acceleration_z optional double = 5
     *
     * @var float
     */
    protected $linear_acceleration_z = null;

    /**
     * magnetic_field_x optional double = 6
     *
     * @var float
     */
    protected $magnetic_field_x = null;

    /**
     * magnetic_field_y optional double = 7
     *
     * @var float
     */
    protected $magnetic_field_y = null;

    /**
     * magnetic_field_z optional double = 8
     *
     * @var float
     */
    protected $magnetic_field_z = null;

    /**
     * magnetic_field_accuracy optional int32 = 9
     *
     * @var int
     */
    protected $magnetic_field_accuracy = null;

    /**
     * attitude_pitch optional double = 10
     *
     * @var float
     */
    protected $attitude_pitch = null;

    /**
     * attitude_yaw optional double = 11
     *
     * @var float
     */
    protected $attitude_yaw = null;

    /**
     * attitude_roll optional double = 12
     *
     * @var float
     */
    protected $attitude_roll = null;

    /**
     * rotation_rate_x optional double = 13
     *
     * @var float
     */
    protected $rotation_rate_x = null;

    /**
     * rotation_rate_y optional double = 14
     *
     * @var float
     */
    protected $rotation_rate_y = null;

    /**
     * rotation_rate_z optional double = 15
     *
     * @var float
     */
    protected $rotation_rate_z = null;

    /**
     * gravity_x optional double = 16
     *
     * @var float
     */
    protected $gravity_x = null;

    /**
     * gravity_y optional double = 17
     *
     * @var float
     */
    protected $gravity_y = null;

    /**
     * gravity_z optional double = 18
     *
     * @var float
     */
    protected $gravity_z = null;

    /**
     * status optional int32 = 19
     *
     * @var int
     */
    protected $status = null;

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
     * Check if 'linear_acceleration_x' has a value
     *
     * @return bool
     */
    public function hasLinearAccelerationX()
    {
        return $this->linear_acceleration_x !== null;
    }

    /**
     * Get 'linear_acceleration_x' value
     *
     * @return float
     */
    public function getLinearAccelerationX()
    {
        return $this->linear_acceleration_x;
    }

    /**
     * Set 'linear_acceleration_x' value
     *
     * @param float $value
     */
    public function setLinearAccelerationX($value = null)
    {
        $this->linear_acceleration_x = $value;
    }

    /**
     * Check if 'linear_acceleration_y' has a value
     *
     * @return bool
     */
    public function hasLinearAccelerationY()
    {
        return $this->linear_acceleration_y !== null;
    }

    /**
     * Get 'linear_acceleration_y' value
     *
     * @return float
     */
    public function getLinearAccelerationY()
    {
        return $this->linear_acceleration_y;
    }

    /**
     * Set 'linear_acceleration_y' value
     *
     * @param float $value
     */
    public function setLinearAccelerationY($value = null)
    {
        $this->linear_acceleration_y = $value;
    }

    /**
     * Check if 'linear_acceleration_z' has a value
     *
     * @return bool
     */
    public function hasLinearAccelerationZ()
    {
        return $this->linear_acceleration_z !== null;
    }

    /**
     * Get 'linear_acceleration_z' value
     *
     * @return float
     */
    public function getLinearAccelerationZ()
    {
        return $this->linear_acceleration_z;
    }

    /**
     * Set 'linear_acceleration_z' value
     *
     * @param float $value
     */
    public function setLinearAccelerationZ($value = null)
    {
        $this->linear_acceleration_z = $value;
    }

    /**
     * Check if 'magnetic_field_x' has a value
     *
     * @return bool
     */
    public function hasMagneticFieldX()
    {
        return $this->magnetic_field_x !== null;
    }

    /**
     * Get 'magnetic_field_x' value
     *
     * @return float
     */
    public function getMagneticFieldX()
    {
        return $this->magnetic_field_x;
    }

    /**
     * Set 'magnetic_field_x' value
     *
     * @param float $value
     */
    public function setMagneticFieldX($value = null)
    {
        $this->magnetic_field_x = $value;
    }

    /**
     * Check if 'magnetic_field_y' has a value
     *
     * @return bool
     */
    public function hasMagneticFieldY()
    {
        return $this->magnetic_field_y !== null;
    }

    /**
     * Get 'magnetic_field_y' value
     *
     * @return float
     */
    public function getMagneticFieldY()
    {
        return $this->magnetic_field_y;
    }

    /**
     * Set 'magnetic_field_y' value
     *
     * @param float $value
     */
    public function setMagneticFieldY($value = null)
    {
        $this->magnetic_field_y = $value;
    }

    /**
     * Check if 'magnetic_field_z' has a value
     *
     * @return bool
     */
    public function hasMagneticFieldZ()
    {
        return $this->magnetic_field_z !== null;
    }

    /**
     * Get 'magnetic_field_z' value
     *
     * @return float
     */
    public function getMagneticFieldZ()
    {
        return $this->magnetic_field_z;
    }

    /**
     * Set 'magnetic_field_z' value
     *
     * @param float $value
     */
    public function setMagneticFieldZ($value = null)
    {
        $this->magnetic_field_z = $value;
    }

    /**
     * Check if 'magnetic_field_accuracy' has a value
     *
     * @return bool
     */
    public function hasMagneticFieldAccuracy()
    {
        return $this->magnetic_field_accuracy !== null;
    }

    /**
     * Get 'magnetic_field_accuracy' value
     *
     * @return int
     */
    public function getMagneticFieldAccuracy()
    {
        return $this->magnetic_field_accuracy;
    }

    /**
     * Set 'magnetic_field_accuracy' value
     *
     * @param int $value
     */
    public function setMagneticFieldAccuracy($value = null)
    {
        $this->magnetic_field_accuracy = $value;
    }

    /**
     * Check if 'attitude_pitch' has a value
     *
     * @return bool
     */
    public function hasAttitudePitch()
    {
        return $this->attitude_pitch !== null;
    }

    /**
     * Get 'attitude_pitch' value
     *
     * @return float
     */
    public function getAttitudePitch()
    {
        return $this->attitude_pitch;
    }

    /**
     * Set 'attitude_pitch' value
     *
     * @param float $value
     */
    public function setAttitudePitch($value = null)
    {
        $this->attitude_pitch = $value;
    }

    /**
     * Check if 'attitude_yaw' has a value
     *
     * @return bool
     */
    public function hasAttitudeYaw()
    {
        return $this->attitude_yaw !== null;
    }

    /**
     * Get 'attitude_yaw' value
     *
     * @return float
     */
    public function getAttitudeYaw()
    {
        return $this->attitude_yaw;
    }

    /**
     * Set 'attitude_yaw' value
     *
     * @param float $value
     */
    public function setAttitudeYaw($value = null)
    {
        $this->attitude_yaw = $value;
    }

    /**
     * Check if 'attitude_roll' has a value
     *
     * @return bool
     */
    public function hasAttitudeRoll()
    {
        return $this->attitude_roll !== null;
    }

    /**
     * Get 'attitude_roll' value
     *
     * @return float
     */
    public function getAttitudeRoll()
    {
        return $this->attitude_roll;
    }

    /**
     * Set 'attitude_roll' value
     *
     * @param float $value
     */
    public function setAttitudeRoll($value = null)
    {
        $this->attitude_roll = $value;
    }

    /**
     * Check if 'rotation_rate_x' has a value
     *
     * @return bool
     */
    public function hasRotationRateX()
    {
        return $this->rotation_rate_x !== null;
    }

    /**
     * Get 'rotation_rate_x' value
     *
     * @return float
     */
    public function getRotationRateX()
    {
        return $this->rotation_rate_x;
    }

    /**
     * Set 'rotation_rate_x' value
     *
     * @param float $value
     */
    public function setRotationRateX($value = null)
    {
        $this->rotation_rate_x = $value;
    }

    /**
     * Check if 'rotation_rate_y' has a value
     *
     * @return bool
     */
    public function hasRotationRateY()
    {
        return $this->rotation_rate_y !== null;
    }

    /**
     * Get 'rotation_rate_y' value
     *
     * @return float
     */
    public function getRotationRateY()
    {
        return $this->rotation_rate_y;
    }

    /**
     * Set 'rotation_rate_y' value
     *
     * @param float $value
     */
    public function setRotationRateY($value = null)
    {
        $this->rotation_rate_y = $value;
    }

    /**
     * Check if 'rotation_rate_z' has a value
     *
     * @return bool
     */
    public function hasRotationRateZ()
    {
        return $this->rotation_rate_z !== null;
    }

    /**
     * Get 'rotation_rate_z' value
     *
     * @return float
     */
    public function getRotationRateZ()
    {
        return $this->rotation_rate_z;
    }

    /**
     * Set 'rotation_rate_z' value
     *
     * @param float $value
     */
    public function setRotationRateZ($value = null)
    {
        $this->rotation_rate_z = $value;
    }

    /**
     * Check if 'gravity_x' has a value
     *
     * @return bool
     */
    public function hasGravityX()
    {
        return $this->gravity_x !== null;
    }

    /**
     * Get 'gravity_x' value
     *
     * @return float
     */
    public function getGravityX()
    {
        return $this->gravity_x;
    }

    /**
     * Set 'gravity_x' value
     *
     * @param float $value
     */
    public function setGravityX($value = null)
    {
        $this->gravity_x = $value;
    }

    /**
     * Check if 'gravity_y' has a value
     *
     * @return bool
     */
    public function hasGravityY()
    {
        return $this->gravity_y !== null;
    }

    /**
     * Get 'gravity_y' value
     *
     * @return float
     */
    public function getGravityY()
    {
        return $this->gravity_y;
    }

    /**
     * Set 'gravity_y' value
     *
     * @param float $value
     */
    public function setGravityY($value = null)
    {
        $this->gravity_y = $value;
    }

    /**
     * Check if 'gravity_z' has a value
     *
     * @return bool
     */
    public function hasGravityZ()
    {
        return $this->gravity_z !== null;
    }

    /**
     * Get 'gravity_z' value
     *
     * @return float
     */
    public function getGravityZ()
    {
        return $this->gravity_z;
    }

    /**
     * Set 'gravity_z' value
     *
     * @param float $value
     */
    public function setGravityZ($value = null)
    {
        $this->gravity_z = $value;
    }

    /**
     * Check if 'status' has a value
     *
     * @return bool
     */
    public function hasStatus()
    {
        return $this->status !== null;
    }

    /**
     * Get 'status' value
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set 'status' value
     *
     * @param int $value
     */
    public function setStatus($value = null)
    {
        $this->status = $value;
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
            'timestamp_snapshot' => null,
            'linear_acceleration_x' => null,
            'linear_acceleration_y' => null,
            'linear_acceleration_z' => null,
            'magnetic_field_x' => null,
            'magnetic_field_y' => null,
            'magnetic_field_z' => null,
            'magnetic_field_accuracy' => null,
            'attitude_pitch' => null,
            'attitude_yaw' => null,
            'attitude_roll' => null,
            'rotation_rate_x' => null,
            'rotation_rate_y' => null,
            'rotation_rate_z' => null,
            'gravity_x' => null,
            'gravity_y' => null,
            'gravity_z' => null,
            'status' => null
        ], $values);

        $message->setTimestampSnapshot($values['timestamp_snapshot']);
        $message->setLinearAccelerationX($values['linear_acceleration_x']);
        $message->setLinearAccelerationY($values['linear_acceleration_y']);
        $message->setLinearAccelerationZ($values['linear_acceleration_z']);
        $message->setMagneticFieldX($values['magnetic_field_x']);
        $message->setMagneticFieldY($values['magnetic_field_y']);
        $message->setMagneticFieldZ($values['magnetic_field_z']);
        $message->setMagneticFieldAccuracy($values['magnetic_field_accuracy']);
        $message->setAttitudePitch($values['attitude_pitch']);
        $message->setAttitudeYaw($values['attitude_yaw']);
        $message->setAttitudeRoll($values['attitude_roll']);
        $message->setRotationRateX($values['rotation_rate_x']);
        $message->setRotationRateY($values['rotation_rate_y']);
        $message->setRotationRateZ($values['rotation_rate_z']);
        $message->setGravityX($values['gravity_x']);
        $message->setGravityY($values['gravity_y']);
        $message->setGravityZ($values['gravity_z']);
        $message->setStatus($values['status']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SensorInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'timestamp_snapshot',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'linear_acceleration_x',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'linear_acceleration_y',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'linear_acceleration_z',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'magnetic_field_x',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'magnetic_field_y',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'magnetic_field_z',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'magnetic_field_accuracy',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'attitude_pitch',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'attitude_yaw',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'attitude_roll',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'rotation_rate_x',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'rotation_rate_y',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'rotation_rate_z',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 16,
                    'name' => 'gravity_x',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 17,
                    'name' => 'gravity_y',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 18,
                    'name' => 'gravity_z',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 19,
                    'name' => 'status',
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

        if ($this->timestamp_snapshot !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->timestamp_snapshot);
        }

        if ($this->linear_acceleration_x !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeDouble($stream, $this->linear_acceleration_x);
        }

        if ($this->linear_acceleration_y !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeDouble($stream, $this->linear_acceleration_y);
        }

        if ($this->linear_acceleration_z !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeDouble($stream, $this->linear_acceleration_z);
        }

        if ($this->magnetic_field_x !== null) {
            $writer->writeVarint($stream, 49);
            $writer->writeDouble($stream, $this->magnetic_field_x);
        }

        if ($this->magnetic_field_y !== null) {
            $writer->writeVarint($stream, 57);
            $writer->writeDouble($stream, $this->magnetic_field_y);
        }

        if ($this->magnetic_field_z !== null) {
            $writer->writeVarint($stream, 65);
            $writer->writeDouble($stream, $this->magnetic_field_z);
        }

        if ($this->magnetic_field_accuracy !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->magnetic_field_accuracy);
        }

        if ($this->attitude_pitch !== null) {
            $writer->writeVarint($stream, 81);
            $writer->writeDouble($stream, $this->attitude_pitch);
        }

        if ($this->attitude_yaw !== null) {
            $writer->writeVarint($stream, 89);
            $writer->writeDouble($stream, $this->attitude_yaw);
        }

        if ($this->attitude_roll !== null) {
            $writer->writeVarint($stream, 97);
            $writer->writeDouble($stream, $this->attitude_roll);
        }

        if ($this->rotation_rate_x !== null) {
            $writer->writeVarint($stream, 105);
            $writer->writeDouble($stream, $this->rotation_rate_x);
        }

        if ($this->rotation_rate_y !== null) {
            $writer->writeVarint($stream, 113);
            $writer->writeDouble($stream, $this->rotation_rate_y);
        }

        if ($this->rotation_rate_z !== null) {
            $writer->writeVarint($stream, 121);
            $writer->writeDouble($stream, $this->rotation_rate_z);
        }

        if ($this->gravity_x !== null) {
            $writer->writeVarint($stream, 129);
            $writer->writeDouble($stream, $this->gravity_x);
        }

        if ($this->gravity_y !== null) {
            $writer->writeVarint($stream, 137);
            $writer->writeDouble($stream, $this->gravity_y);
        }

        if ($this->gravity_z !== null) {
            $writer->writeVarint($stream, 145);
            $writer->writeDouble($stream, $this->gravity_z);
        }

        if ($this->status !== null) {
            $writer->writeVarint($stream, 152);
            $writer->writeVarint($stream, $this->status);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->timestamp_snapshot = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->linear_acceleration_x = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->linear_acceleration_y = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->linear_acceleration_z = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->magnetic_field_x = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->magnetic_field_y = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->magnetic_field_z = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->magnetic_field_accuracy = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->attitude_pitch = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->attitude_yaw = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->attitude_roll = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->rotation_rate_x = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->rotation_rate_y = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->rotation_rate_z = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 16) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->gravity_x = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 17) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->gravity_y = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 18) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->gravity_z = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 19) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->status = $reader->readVarint($stream);

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

        if ($this->timestamp_snapshot !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->timestamp_snapshot);
        }

        if ($this->linear_acceleration_x !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->linear_acceleration_y !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->linear_acceleration_z !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->magnetic_field_x !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->magnetic_field_y !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->magnetic_field_z !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->magnetic_field_accuracy !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->magnetic_field_accuracy);
        }

        if ($this->attitude_pitch !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->attitude_yaw !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->attitude_roll !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->rotation_rate_x !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->rotation_rate_y !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->rotation_rate_z !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->gravity_x !== null) {
            $size += 2;
            $size += 8;
        }

        if ($this->gravity_y !== null) {
            $size += 2;
            $size += 8;
        }

        if ($this->gravity_z !== null) {
            $size += 2;
            $size += 8;
        }

        if ($this->status !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->status);
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
        $this->timestamp_snapshot = null;
        $this->linear_acceleration_x = null;
        $this->linear_acceleration_y = null;
        $this->linear_acceleration_z = null;
        $this->magnetic_field_x = null;
        $this->magnetic_field_y = null;
        $this->magnetic_field_z = null;
        $this->magnetic_field_accuracy = null;
        $this->attitude_pitch = null;
        $this->attitude_yaw = null;
        $this->attitude_roll = null;
        $this->rotation_rate_x = null;
        $this->rotation_rate_y = null;
        $this->rotation_rate_z = null;
        $this->gravity_x = null;
        $this->gravity_y = null;
        $this->gravity_z = null;
        $this->status = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Envelopes\Signature\SensorInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->timestamp_snapshot = ($message->timestamp_snapshot !== null) ? $message->timestamp_snapshot : $this->timestamp_snapshot;
        $this->linear_acceleration_x = ($message->linear_acceleration_x !== null) ? $message->linear_acceleration_x : $this->linear_acceleration_x;
        $this->linear_acceleration_y = ($message->linear_acceleration_y !== null) ? $message->linear_acceleration_y : $this->linear_acceleration_y;
        $this->linear_acceleration_z = ($message->linear_acceleration_z !== null) ? $message->linear_acceleration_z : $this->linear_acceleration_z;
        $this->magnetic_field_x = ($message->magnetic_field_x !== null) ? $message->magnetic_field_x : $this->magnetic_field_x;
        $this->magnetic_field_y = ($message->magnetic_field_y !== null) ? $message->magnetic_field_y : $this->magnetic_field_y;
        $this->magnetic_field_z = ($message->magnetic_field_z !== null) ? $message->magnetic_field_z : $this->magnetic_field_z;
        $this->magnetic_field_accuracy = ($message->magnetic_field_accuracy !== null) ? $message->magnetic_field_accuracy : $this->magnetic_field_accuracy;
        $this->attitude_pitch = ($message->attitude_pitch !== null) ? $message->attitude_pitch : $this->attitude_pitch;
        $this->attitude_yaw = ($message->attitude_yaw !== null) ? $message->attitude_yaw : $this->attitude_yaw;
        $this->attitude_roll = ($message->attitude_roll !== null) ? $message->attitude_roll : $this->attitude_roll;
        $this->rotation_rate_x = ($message->rotation_rate_x !== null) ? $message->rotation_rate_x : $this->rotation_rate_x;
        $this->rotation_rate_y = ($message->rotation_rate_y !== null) ? $message->rotation_rate_y : $this->rotation_rate_y;
        $this->rotation_rate_z = ($message->rotation_rate_z !== null) ? $message->rotation_rate_z : $this->rotation_rate_z;
        $this->gravity_x = ($message->gravity_x !== null) ? $message->gravity_x : $this->gravity_x;
        $this->gravity_y = ($message->gravity_y !== null) ? $message->gravity_y : $this->gravity_y;
        $this->gravity_z = ($message->gravity_z !== null) ? $message->gravity_z : $this->gravity_z;
        $this->status = ($message->status !== null) ? $message->status : $this->status;
    }


}

