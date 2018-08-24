<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateMasterRequest updates the master of the cluster.
 *
 * Generated from protobuf message <code>google.container.v1.UpdateMasterRequest</code>
 */
class UpdateMasterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     */
    private $zone = '';
    /**
     * The name of the cluster to upgrade.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     */
    private $cluster_id = '';
    /**
     * The Kubernetes version to change the master to. The only valid value is the
     * latest supported version. Use "-" to have the server automatically select
     * the latest version.
     *
     * Generated from protobuf field <code>string master_version = 4;</code>
     */
    private $master_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           The Google Developers Console [project ID or project
     *           number](https://support.google.com/cloud/answer/6158840).
     *     @type string $zone
     *           The name of the Google Compute Engine
     *           [zone](/compute/docs/zones#available) in which the cluster
     *           resides.
     *     @type string $cluster_id
     *           The name of the cluster to upgrade.
     *     @type string $master_version
     *           The Kubernetes version to change the master to. The only valid value is the
     *           latest supported version. Use "-" to have the server automatically select
     *           the latest version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * The name of the cluster to upgrade.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * The name of the cluster to upgrade.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * The Kubernetes version to change the master to. The only valid value is the
     * latest supported version. Use "-" to have the server automatically select
     * the latest version.
     *
     * Generated from protobuf field <code>string master_version = 4;</code>
     * @return string
     */
    public function getMasterVersion()
    {
        return $this->master_version;
    }

    /**
     * The Kubernetes version to change the master to. The only valid value is the
     * latest supported version. Use "-" to have the server automatically select
     * the latest version.
     *
     * Generated from protobuf field <code>string master_version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMasterVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->master_version = $var;

        return $this;
    }

}
