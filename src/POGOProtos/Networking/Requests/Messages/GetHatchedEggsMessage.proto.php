<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Networking\Requests\Messages {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Networking.Requests.Messages.GetHatchedEggsMessage
  final class GetHatchedEggsMessage extends ProtobufMessage {

    private $_unknown;

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
    }

    public function size() {
      $size = 0;
      return $size;
    }

    public function __toString() {
      return '';
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.GetHatchedEggsMessage)
  }

}