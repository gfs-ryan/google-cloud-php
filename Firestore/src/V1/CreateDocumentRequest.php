<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [Firestore.CreateDocument][google.firestore.v1.Firestore.CreateDocument].
 *
 * Generated from protobuf message <code>google.firestore.v1.CreateDocumentRequest</code>
 */
class CreateDocumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The parent resource. For example:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/chatrooms/{chatroom_id}`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The collection ID, relative to `parent`, to list. For example: `chatrooms`.
     *
     * Generated from protobuf field <code>string collection_id = 2;</code>
     */
    private $collection_id = '';
    /**
     * The client-assigned document ID to use for this document.
     * Optional. If not specified, an ID will be assigned by the service.
     *
     * Generated from protobuf field <code>string document_id = 3;</code>
     */
    private $document_id = '';
    /**
     * The document to create. `name` must not be set.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Document document = 4;</code>
     */
    private $document = null;
    /**
     * The fields to return. If not set, returns all fields.
     * If the document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1.DocumentMask mask = 5;</code>
     */
    private $mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The parent resource. For example:
     *           `projects/{project_id}/databases/{database_id}/documents` or
     *           `projects/{project_id}/databases/{database_id}/documents/chatrooms/{chatroom_id}`
     *     @type string $collection_id
     *           The collection ID, relative to `parent`, to list. For example: `chatrooms`.
     *     @type string $document_id
     *           The client-assigned document ID to use for this document.
     *           Optional. If not specified, an ID will be assigned by the service.
     *     @type \Google\Cloud\Firestore\V1\Document $document
     *           The document to create. `name` must not be set.
     *     @type \Google\Cloud\Firestore\V1\DocumentMask $mask
     *           The fields to return. If not set, returns all fields.
     *           If the document has a field that is not present in this mask, that field
     *           will not be returned in the response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * The parent resource. For example:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/chatrooms/{chatroom_id}`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent resource. For example:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/chatrooms/{chatroom_id}`
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
     * The collection ID, relative to `parent`, to list. For example: `chatrooms`.
     *
     * Generated from protobuf field <code>string collection_id = 2;</code>
     * @return string
     */
    public function getCollectionId()
    {
        return $this->collection_id;
    }

    /**
     * The collection ID, relative to `parent`, to list. For example: `chatrooms`.
     *
     * Generated from protobuf field <code>string collection_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCollectionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->collection_id = $var;

        return $this;
    }

    /**
     * The client-assigned document ID to use for this document.
     * Optional. If not specified, an ID will be assigned by the service.
     *
     * Generated from protobuf field <code>string document_id = 3;</code>
     * @return string
     */
    public function getDocumentId()
    {
        return $this->document_id;
    }

    /**
     * The client-assigned document ID to use for this document.
     * Optional. If not specified, an ID will be assigned by the service.
     *
     * Generated from protobuf field <code>string document_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->document_id = $var;

        return $this;
    }

    /**
     * The document to create. `name` must not be set.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Document document = 4;</code>
     * @return \Google\Cloud\Firestore\V1\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * The document to create. `name` must not be set.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Document document = 4;</code>
     * @param \Google\Cloud\Firestore\V1\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * The fields to return. If not set, returns all fields.
     * If the document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1.DocumentMask mask = 5;</code>
     * @return \Google\Cloud\Firestore\V1\DocumentMask
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * The fields to return. If not set, returns all fields.
     * If the document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1.DocumentMask mask = 5;</code>
     * @param \Google\Cloud\Firestore\V1\DocumentMask $var
     * @return $this
     */
    public function setMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\DocumentMask::class);
        $this->mask = $var;

        return $this;
    }

}

