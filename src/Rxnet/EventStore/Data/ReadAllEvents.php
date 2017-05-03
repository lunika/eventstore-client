<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientMessageDtos.proto

namespace Rxnet\EventStore\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>Rxnet.EventStore.Data.ReadAllEvents</code>
 */
class ReadAllEvents extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 commit_position = 1;</code>
     */
    private $commit_position = 0;
    /**
     * <code>int64 prepare_position = 2;</code>
     */
    private $prepare_position = 0;
    /**
     * <code>int32 max_count = 3;</code>
     */
    private $max_count = 0;
    /**
     * <code>bool resolve_link_tos = 4;</code>
     */
    private $resolve_link_tos = false;
    /**
     * <code>bool require_master = 5;</code>
     */
    private $require_master = false;

    public function __construct() {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 commit_position = 1;</code>
     */
    public function getCommitPosition()
    {
        return $this->commit_position;
    }

    /**
     * <code>int64 commit_position = 1;</code>
     */
    public function setCommitPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->commit_position = $var;
    }

    /**
     * <code>int64 prepare_position = 2;</code>
     */
    public function getPreparePosition()
    {
        return $this->prepare_position;
    }

    /**
     * <code>int64 prepare_position = 2;</code>
     */
    public function setPreparePosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->prepare_position = $var;
    }

    /**
     * <code>int32 max_count = 3;</code>
     */
    public function getMaxCount()
    {
        return $this->max_count;
    }

    /**
     * <code>int32 max_count = 3;</code>
     */
    public function setMaxCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_count = $var;
    }

    /**
     * <code>bool resolve_link_tos = 4;</code>
     */
    public function getResolveLinkTos()
    {
        return $this->resolve_link_tos;
    }

    /**
     * <code>bool resolve_link_tos = 4;</code>
     */
    public function setResolveLinkTos($var)
    {
        GPBUtil::checkBool($var);
        $this->resolve_link_tos = $var;
    }

    /**
     * <code>bool require_master = 5;</code>
     */
    public function getRequireMaster()
    {
        return $this->require_master;
    }

    /**
     * <code>bool require_master = 5;</code>
     */
    public function setRequireMaster($var)
    {
        GPBUtil::checkBool($var);
        $this->require_master = $var;
    }

}
