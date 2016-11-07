<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/FortSearchMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class FortSearchMessage extends \Google\Protobuf\Internal\Message
{
    private $fort_id = '';
    private $player_latitude = 0.0;
    private $player_longitude = 0.0;
    private $fort_latitude = 0.0;
    private $fort_longitude = 0.0;

    public function getFortId()
    {
        return $this->fort_id;
    }

    public function setFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_id = $var;
    }

    public function getPlayerLatitude()
    {
        return $this->player_latitude;
    }

    public function setPlayerLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_latitude = $var;
    }

    public function getPlayerLongitude()
    {
        return $this->player_longitude;
    }

    public function setPlayerLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_longitude = $var;
    }

    public function getFortLatitude()
    {
        return $this->fort_latitude;
    }

    public function setFortLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->fort_latitude = $var;
    }

    public function getFortLongitude()
    {
        return $this->fort_longitude;
    }

    public function setFortLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->fort_longitude = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0afb010a3f504f474f50726f746f732f4e6574776f726b696e672f526571" .
    "75657374732f4d657373616765732f466f72745365617263684d65737361" .
    "67652e70726f746f1227504f474f50726f746f732e4e6574776f726b696e" .
    "672e52657175657374732e4d657373616765732286010a11466f72745365" .
    "617263684d657373616765120f0a07666f72745f69641801200128091217" .
    "0a0f706c617965725f6c6174697475646518022001280112180a10706c61" .
    "7965725f6c6f6e67697475646518032001280112150a0d666f72745f6c61" .
    "74697475646518042001280112160a0e666f72745f6c6f6e676974756465" .
    "180520012801620670726f746f33"
));
