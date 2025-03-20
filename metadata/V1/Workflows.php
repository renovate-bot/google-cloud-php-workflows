<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/v1/workflows.proto

namespace GPBMetadata\Google\Cloud\Workflows\V1;

class Workflows
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�\'
)google/cloud/workflows/v1/workflows.protogoogle.cloud.workflows.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Workflow
name (	
description (	=
state (2).google.cloud.workflows.v1.Workflow.StateB�A
revision_id (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A=
revision_create_time (2.google.protobuf.TimestampB�A?
labels (2/.google.cloud.workflows.v1.Workflow.LabelsEntry
service_account	 (	
source_contents
 (	H B
crypto_key_name (	B)�A�A#
!cloudkms.googleapis.com/CryptoKeyH
state_error (2..google.cloud.workflows.v1.Workflow.StateErrorB�AM
call_log_level (20.google.cloud.workflows.v1.Workflow.CallLogLevelB�AP
user_env_vars (24.google.cloud.workflows.v1.Workflow.UserEnvVarsEntryB�AV
execution_history_level (20.google.cloud.workflows.v1.ExecutionHistoryLevelB�A?
all_kms_keys (	B)�A�A#
!cloudkms.googleapis.com/CryptoKeyO
all_kms_keys_versions (	B0�A�A*
(cloudkms.googleapis.com/CryptoKeyVersionL
crypto_key_version (	B0�A�A*
(cloudkms.googleapis.com/CryptoKeyVersionF
tags (2-.google.cloud.workflows.v1.Workflow.TagsEntryB	�A�A�A�

StateError
details (	A
type (23.google.cloud.workflows.v1.Workflow.StateError.Type"+
Type
TYPE_UNSPECIFIED 
	KMS_ERROR-
LabelsEntry
key (	
value (	:82
UserEnvVarsEntry
key (	
value (	:8+
	TagsEntry
key (	
value (	:8";
State
STATE_UNSPECIFIED 

ACTIVE
UNAVAILABLE"d
CallLogLevel
CALL_LOG_LEVEL_UNSPECIFIED 
LOG_ALL_CALLS
LOG_ERRORS_ONLY
LOG_NONE:d�Aa
!workflows.googleapis.com/Workflow<projects/{project}/locations/{location}/workflows/{workflow}B
source_code"�
ListWorkflowsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"}
ListWorkflowsResponse6
	workflows (2#.google.cloud.workflows.v1.Workflow
next_page_token (	
unreachable (	"g
GetWorkflowRequest7
name (	B)�A�A#
!workflows.googleapis.com/Workflow
revision_id (	B�A"�
CreateWorkflowRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location:
workflow (2#.google.cloud.workflows.v1.WorkflowB�A
workflow_id (	B�A"P
DeleteWorkflowRequest7
name (	B)�A�A#
!workflows.googleapis.com/Workflow"�
UpdateWorkflowRequest:
workflow (2#.google.cloud.workflows.v1.WorkflowB�A/
update_mask (2.google.protobuf.FieldMask"�
OperationMetadata/
create_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
target (	
verb (	
api_version (	"~
ListWorkflowRevisionsRequest7
name (	B)�A�A#
!workflows.googleapis.com/Workflow
	page_size (

page_token (	"p
ListWorkflowRevisionsResponse6
	workflows (2#.google.cloud.workflows.v1.Workflow
next_page_token (	*}
ExecutionHistoryLevel\'
#EXECUTION_HISTORY_LEVEL_UNSPECIFIED 
EXECUTION_HISTORY_BASIC
EXECUTION_HISTORY_DETAILED2�

	Workflows�
ListWorkflows/.google.cloud.workflows.v1.ListWorkflowsRequest0.google.cloud.workflows.v1.ListWorkflowsResponse">�Aparent���/-/v1/{parent=projects/*/locations/*}/workflows�
GetWorkflow-.google.cloud.workflows.v1.GetWorkflowRequest#.google.cloud.workflows.v1.Workflow"<�Aname���/-/v1/{name=projects/*/locations/*/workflows/*}�
CreateWorkflow0.google.cloud.workflows.v1.CreateWorkflowRequest.google.longrunning.Operation"}�A
WorkflowOperationMetadata�Aparent,workflow,workflow_id���9"-/v1/{parent=projects/*/locations/*}/workflows:workflow�
DeleteWorkflow0.google.cloud.workflows.v1.DeleteWorkflowRequest.google.longrunning.Operation"i�A*
google.protobuf.EmptyOperationMetadata�Aname���/*-/v1/{name=projects/*/locations/*/workflows/*}�
UpdateWorkflow0.google.cloud.workflows.v1.UpdateWorkflowRequest.google.longrunning.Operation"�A
WorkflowOperationMetadata�Aworkflow,update_mask���B26/v1/{workflow.name=projects/*/locations/*/workflows/*}:workflow�
ListWorkflowRevisions7.google.cloud.workflows.v1.ListWorkflowRevisionsRequest8.google.cloud.workflows.v1.ListWorkflowRevisionsResponse"C���=;/v1/{name=projects/*/locations/*/workflows/*}:listRevisionsL�Aworkflows.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.workflows.v1BWorkflowsProtoPZ;cloud.google.com/go/workflows/apiv1/workflowspb;workflowspb�Av
!cloudkms.googleapis.com/CryptoKeyQprojects/{project}/locations/{location}/keyRings/{keyRing}/cryptoKeys/{cryptoKey}�A�
(cloudkms.googleapis.com/CryptoKeyVersionvprojects/{project}/locations/{location}/keyRings/{keyRing}/cryptoKeys/{cryptoKey}/cryptoKeyVersions/{cryptoKeyVersion}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

