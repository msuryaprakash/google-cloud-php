<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/job.proto

namespace Google\Cloud\Talent\V4beta1\Job;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options for job processing.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Job.ProcessingOptions</code>
 */
class ProcessingOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * If set to `true`, the service does not attempt to resolve a
     * more precise address for the job.
     *
     * Generated from protobuf field <code>bool disable_street_address_resolution = 1;</code>
     */
    private $disable_street_address_resolution = false;
    /**
     * Option for job HTML content sanitization. Applied fields are:
     * * description
     * * applicationInfo.instruction
     * * incentives
     * * qualifications
     * * responsibilities
     * HTML tags in these fields may be stripped if sanitiazation isn't
     * disabled.
     * Defaults to
     * [HtmlSanitization.SIMPLE_FORMATTING_ONLY][google.cloud.talent.v4beta1.HtmlSanitization.SIMPLE_FORMATTING_ONLY].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.HtmlSanitization html_sanitization = 2;</code>
     */
    private $html_sanitization = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $disable_street_address_resolution
     *           If set to `true`, the service does not attempt to resolve a
     *           more precise address for the job.
     *     @type int $html_sanitization
     *           Option for job HTML content sanitization. Applied fields are:
     *           * description
     *           * applicationInfo.instruction
     *           * incentives
     *           * qualifications
     *           * responsibilities
     *           HTML tags in these fields may be stripped if sanitiazation isn't
     *           disabled.
     *           Defaults to
     *           [HtmlSanitization.SIMPLE_FORMATTING_ONLY][google.cloud.talent.v4beta1.HtmlSanitization.SIMPLE_FORMATTING_ONLY].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * If set to `true`, the service does not attempt to resolve a
     * more precise address for the job.
     *
     * Generated from protobuf field <code>bool disable_street_address_resolution = 1;</code>
     * @return bool
     */
    public function getDisableStreetAddressResolution()
    {
        return $this->disable_street_address_resolution;
    }

    /**
     * If set to `true`, the service does not attempt to resolve a
     * more precise address for the job.
     *
     * Generated from protobuf field <code>bool disable_street_address_resolution = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableStreetAddressResolution($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_street_address_resolution = $var;

        return $this;
    }

    /**
     * Option for job HTML content sanitization. Applied fields are:
     * * description
     * * applicationInfo.instruction
     * * incentives
     * * qualifications
     * * responsibilities
     * HTML tags in these fields may be stripped if sanitiazation isn't
     * disabled.
     * Defaults to
     * [HtmlSanitization.SIMPLE_FORMATTING_ONLY][google.cloud.talent.v4beta1.HtmlSanitization.SIMPLE_FORMATTING_ONLY].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.HtmlSanitization html_sanitization = 2;</code>
     * @return int
     */
    public function getHtmlSanitization()
    {
        return $this->html_sanitization;
    }

    /**
     * Option for job HTML content sanitization. Applied fields are:
     * * description
     * * applicationInfo.instruction
     * * incentives
     * * qualifications
     * * responsibilities
     * HTML tags in these fields may be stripped if sanitiazation isn't
     * disabled.
     * Defaults to
     * [HtmlSanitization.SIMPLE_FORMATTING_ONLY][google.cloud.talent.v4beta1.HtmlSanitization.SIMPLE_FORMATTING_ONLY].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.HtmlSanitization html_sanitization = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHtmlSanitization($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\HtmlSanitization::class);
        $this->html_sanitization = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProcessingOptions::class, \Google\Cloud\Talent\V4beta1\Job_ProcessingOptions::class);

