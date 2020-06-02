<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\FieldDictionaryLevel;


/**
 * Class StandardField
 * @package Patrikap\Passtore\Base\FieldDictionaryLevel
 *
 * Standard Field Dictionary Keys
 * Information about a field.
 * These keys are used for all dictionaries that define a field.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 02.06.2020 22:31
 * @author Konstantin.K
 */
class StandardField
{
    protected const SYMBOL_TO_UPDATE = '%@';
    //
    public const    DATA_TYPE_PHONE   = 'PKDataDetectorTypePhoneNumber';
    public const    DATA_TYPE_LINK    = 'PKDataDetectorTypeLink';
    public const    DATA_TYPE_ADDRESS = 'PKDataDetectorTypeAddress';
    public const    DATA_TYPE_EVENT   = 'PKDataDetectorTypeCalendarEvent';
    //
    public const    TEXT_ALIGN_LEFT    = 'PKTextAlignmentLeft';
    public const    TEXT_ALIGN_CENTER  = 'PKTextAlignmentCenter';
    public const    TEXT_ALIGN_RIGHT   = 'PKTextAlignmentRight';
    public const    TEXT_ALIGN_NATURAL = 'PKTextAlignmentNatural';
    /**
     * @var string|int|null Optional. Attributed value of the field.
     * The value may contain HTML markup for links. Only the <a> tag and its href attribute are supported. For example,
     *     the following is key-value pair specifies a link with the text “Edit my profile”:
     * "attributedValue": "<a href='http://example.com/customers/123'>Edit my profile</a>"
     * This key’s value overrides the text specified by the value key.
     * Available in iOS 7.0.
     * localizable string, ISO 8601 date as a string, or number
     */
    protected $attributedValue = null;
    /**
     * @var string|null Optional. Format string for the alert text that is displayed when the pass is updated. The
     *     format string must contain the escape %@, which is replaced with the field’s new value. For example, “Gate
     *     changed to %@.”
     * If you don’t specify a change message, the user isn’t notified when the field changes.
     */
    protected ?string $changeMessage = null;
    /**
     * @var array|null Optional. Data detectors that are applied to the field’s value. Valid values are:
     * PKDataDetectorTypePhoneNumber
     * PKDataDetectorTypeLink
     * PKDataDetectorTypeAddress
     * PKDataDetectorTypeCalendarEvent
     * The default value is all data detectors. Provide an empty array to use no data detectors.
     * Data detectors are applied only to back fields.
     */
    protected ?array $dataDetectorTypes = null;
    /** @var string Required. The key must be unique within the scope of the entire pass. For example, “departure-gate.” */
    protected string $key;
    /** @var string|null Optional. Label text for the field. */
    protected ?string $label = null;
    /**
     * @var string|null Optional. Alignment for the field’s contents. Must be one of the following values:
     * PKTextAlignmentLeft
     * PKTextAlignmentCenter
     * PKTextAlignmentRight
     * PKTextAlignmentNatural
     * The default value is natural alignment, which aligns the text appropriately based on its script direction.
     * This key is not allowed for primary fields or back fields.
     */
    protected ?string $textAlignment = null;
    /**
     * @var string|int Required. Value of the field, for example, 42.
     * localizable string, ISO 8601 date as a string, or number
     */
    protected $value;
}
