<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/entity_type.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [EntityTypes.BatchDeleteEntityTypes][google.cloud.dialogflow.v2.EntityTypes.BatchDeleteEntityTypes].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.BatchDeleteEntityTypesRequest</code>
 */
class BatchDeleteEntityTypesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the agent to delete all entities types for. Format:
     * `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Required. The names entity types to delete. All names must point to the
     * same agent as `parent`.
     *
     * Generated from protobuf field <code>repeated string entity_type_names = 2;</code>
     */
    private $entity_type_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the agent to delete all entities types for. Format:
     *           `projects/<Project ID>/agent`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $entity_type_names
     *           Required. The names entity types to delete. All names must point to the
     *           same agent as `parent`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the agent to delete all entities types for. Format:
     * `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the agent to delete all entities types for. Format:
     * `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The names entity types to delete. All names must point to the
     * same agent as `parent`.
     *
     * Generated from protobuf field <code>repeated string entity_type_names = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntityTypeNames()
    {
        return $this->entity_type_names;
    }

    /**
     * Required. The names entity types to delete. All names must point to the
     * same agent as `parent`.
     *
     * Generated from protobuf field <code>repeated string entity_type_names = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntityTypeNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->entity_type_names = $arr;

        return $this;
    }

}

