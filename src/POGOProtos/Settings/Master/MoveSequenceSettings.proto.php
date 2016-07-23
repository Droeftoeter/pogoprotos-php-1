<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Settings\Master {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Settings.Master.MoveSequenceSettings
  final class MoveSequenceSettings extends ProtobufMessage {

    private $_unknown;
    private $sequence = array(); // repeated string sequence = 1

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
          case 1: // repeated string sequence = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->sequence[] = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      foreach($this->sequence as $v) {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, strlen($v));
        fwrite($fp, $v);
      }
    }

    public function size() {
      $size = 0;
      foreach($this->sequence as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearSequence() { $this->sequence = array(); }
    public function getSequenceCount() { return count($this->sequence); }
    public function getSequence($index) { return $this->sequence[$index]; }
    public function getSequenceArray() { return $this->sequence; }
    public function setSequence($index, array $value) {$this->sequence[$index] = $value; }
    public function addSequence(array $value) { $this->sequence[] = $value; }
    public function addAllSequence(array $values) { foreach($values as $value) {$this->sequence[] = $value; }}

    public function __toString() {
      return ''
           . Protobuf::toString('sequence', $this->sequence, "");
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.MoveSequenceSettings)
  }

}