<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/completion_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Auto-complete parameters.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.CompleteQueryRequest</code>
 */
class CompleteQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of tenant the completion is performed within.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/foo/tenant/bar".
     * If tenant id is unspecified, the default tenant is used, for
     * example, "projects/foo".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Required. The query used to generate suggestions.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $query = '';
    /**
     * The list of languages of the query. This is
     * the BCP-47 language code, such as "en-US" or "sr-Latn".
     * For more information, see
     * [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     * For
     * [CompletionType.JOB_TITLE][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.JOB_TITLE]
     * type, only open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * are returned.
     * For
     * [CompletionType.COMPANY_NAME][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMPANY_NAME]
     * type, only companies having open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * are returned.
     * For
     * [CompletionType.COMBINED][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMBINED]
     * type, only open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * or companies having open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * are returned.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>repeated string language_codes = 3;</code>
     */
    private $language_codes;
    /**
     * Required. Completion result count.
     * The maximum allowed page size is 10.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $page_size = 0;
    /**
     * If provided, restricts completion to specified company.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     * example, "projects/foo/tenants/bar/companies/baz".
     * If tenant id is unspecified, the default tenant is used, for
     * example, "projects/foo".
     *
     * Generated from protobuf field <code>string company = 5;</code>
     */
    private $company = '';
    /**
     * The scope of the completion. The defaults is
     * [CompletionScope.PUBLIC][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionScope.PUBLIC].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionScope scope = 6;</code>
     */
    private $scope = 0;
    /**
     * The completion topic. The default is
     * [CompletionType.COMBINED][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMBINED].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType type = 7;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of tenant the completion is performed within.
     *           The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     *           "projects/foo/tenant/bar".
     *           If tenant id is unspecified, the default tenant is used, for
     *           example, "projects/foo".
     *     @type string $query
     *           Required. The query used to generate suggestions.
     *           The maximum number of allowed characters is 255.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $language_codes
     *           The list of languages of the query. This is
     *           the BCP-47 language code, such as "en-US" or "sr-Latn".
     *           For more information, see
     *           [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     *           For
     *           [CompletionType.JOB_TITLE][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.JOB_TITLE]
     *           type, only open jobs with the same
     *           [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     *           are returned.
     *           For
     *           [CompletionType.COMPANY_NAME][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMPANY_NAME]
     *           type, only companies having open jobs with the same
     *           [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     *           are returned.
     *           For
     *           [CompletionType.COMBINED][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMBINED]
     *           type, only open jobs with the same
     *           [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     *           or companies having open jobs with the same
     *           [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     *           are returned.
     *           The maximum number of allowed characters is 255.
     *     @type int $page_size
     *           Required. Completion result count.
     *           The maximum allowed page size is 10.
     *     @type string $company
     *           If provided, restricts completion to specified company.
     *           The format is
     *           "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     *           example, "projects/foo/tenants/bar/companies/baz".
     *           If tenant id is unspecified, the default tenant is used, for
     *           example, "projects/foo".
     *     @type int $scope
     *           The scope of the completion. The defaults is
     *           [CompletionScope.PUBLIC][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionScope.PUBLIC].
     *     @type int $type
     *           The completion topic. The default is
     *           [CompletionType.COMBINED][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMBINED].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\CompletionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of tenant the completion is performed within.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/foo/tenant/bar".
     * If tenant id is unspecified, the default tenant is used, for
     * example, "projects/foo".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of tenant the completion is performed within.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/foo/tenant/bar".
     * If tenant id is unspecified, the default tenant is used, for
     * example, "projects/foo".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The query used to generate suggestions.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Required. The query used to generate suggestions.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * The list of languages of the query. This is
     * the BCP-47 language code, such as "en-US" or "sr-Latn".
     * For more information, see
     * [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     * For
     * [CompletionType.JOB_TITLE][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.JOB_TITLE]
     * type, only open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * are returned.
     * For
     * [CompletionType.COMPANY_NAME][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMPANY_NAME]
     * type, only companies having open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * are returned.
     * For
     * [CompletionType.COMBINED][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMBINED]
     * type, only open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * or companies having open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * are returned.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>repeated string language_codes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguageCodes()
    {
        return $this->language_codes;
    }

    /**
     * The list of languages of the query. This is
     * the BCP-47 language code, such as "en-US" or "sr-Latn".
     * For more information, see
     * [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     * For
     * [CompletionType.JOB_TITLE][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.JOB_TITLE]
     * type, only open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * are returned.
     * For
     * [CompletionType.COMPANY_NAME][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMPANY_NAME]
     * type, only companies having open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * are returned.
     * For
     * [CompletionType.COMBINED][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMBINED]
     * type, only open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * or companies having open jobs with the same
     * [language_codes][google.cloud.talent.v4beta1.CompleteQueryRequest.language_codes]
     * are returned.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>repeated string language_codes = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguageCodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->language_codes = $arr;

        return $this;
    }

    /**
     * Required. Completion result count.
     * The maximum allowed page size is 10.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Required. Completion result count.
     * The maximum allowed page size is 10.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If provided, restricts completion to specified company.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     * example, "projects/foo/tenants/bar/companies/baz".
     * If tenant id is unspecified, the default tenant is used, for
     * example, "projects/foo".
     *
     * Generated from protobuf field <code>string company = 5;</code>
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * If provided, restricts completion to specified company.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     * example, "projects/foo/tenants/bar/companies/baz".
     * If tenant id is unspecified, the default tenant is used, for
     * example, "projects/foo".
     *
     * Generated from protobuf field <code>string company = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCompany($var)
    {
        GPBUtil::checkString($var, True);
        $this->company = $var;

        return $this;
    }

    /**
     * The scope of the completion. The defaults is
     * [CompletionScope.PUBLIC][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionScope.PUBLIC].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionScope scope = 6;</code>
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * The scope of the completion. The defaults is
     * [CompletionScope.PUBLIC][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionScope.PUBLIC].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionScope scope = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\CompleteQueryRequest_CompletionScope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * The completion topic. The default is
     * [CompletionType.COMBINED][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMBINED].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType type = 7;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The completion topic. The default is
     * [CompletionType.COMBINED][google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType.COMBINED].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\CompleteQueryRequest_CompletionType::class);
        $this->type = $var;

        return $this;
    }

}

