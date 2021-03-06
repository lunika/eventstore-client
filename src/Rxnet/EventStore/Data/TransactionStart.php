<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientMessageDtos.proto

namespace Rxnet\EventStore\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>Rxnet.EventStore.Data.TransactionStart</code>
 */
class TransactionStart extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string event_stream_id = 1;</code>
     */
    private $event_stream_id = '';
    /**
     * <code>int32 expected_version = 2;</code>
     */
    private $expected_version = 0;
    /**
     * <code>bool require_master = 3;</code>
     */
    private $require_master = false;

    public function __construct() {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct();
    }

    /**
     * <code>string event_stream_id = 1;</code>
     */
    public function getEventStreamId()
    {
        return $this->event_stream_id;
    }

    /**
     * <code>string event_stream_id = 1;</code>
     */
    public function setEventStreamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_stream_id = $var;
    }

    /**
     * <code>int32 expected_version = 2;</code>
     */
    public function getExpectedVersion()
    {
        return $this->expected_version;
    }

    /**
     * <code>int32 expected_version = 2;</code>
     */
    public function setExpectedVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->expected_version = $var;
    }

    /**
     * <code>bool require_master = 3;</code>
     */
    public function getRequireMaster()
    {
        return $this->require_master;
    }

    /**
     * <code>bool require_master = 3;</code>
     */
    public function setRequireMaster($var)
    {
        GPBUtil::checkBool($var);
        $this->require_master = $var;
    }

}

