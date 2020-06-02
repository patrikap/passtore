<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\FieldDictionaryLevel;


/**
 * Class DateStyle
 * @package Patrikap\Passtore\Base\FieldDictionaryLevel
 *
 * Date Style Keys
 * Information about how a date should be displayed in a field.
 * If any of these keys is present, the value of the field is treated as a date. Either specify both a date style and a
 *     time style, or neither.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 02.06.2020 22:48
 * @author Konstantin.K
 */
class DateStyle
{
//protected const DATE_FORMAT = \DateTime::ISO8601;
    /**
     * The date styles and time styles have the same meaning as the Cocoa formatter styles with corresponding names, as
     * shown in Table 4-1. Table 4-1  Date and time styles
     */
    public const DATE_STYLE_NONE   = 'PKDateStyleNone';
    public const DATE_STYLE_SHORT  = 'PKDateStyleShort';
    public const DATE_STYLE_MEDIUM = 'PKDateStyleMedium';
    public const DATE_STYLE_LONG   = 'PKDateStyleLong';
    public const DATE_STYLE_FULL   = 'PKDateStyleFull';
    /** @var string|null Style of date to display. Must be one of the styles listed in Table 4-1. */
    protected ?string $dateStyle = null;
    /**
     * @var bool|null Optional. Always display the time and date in the given time zone, not in the user’s current time
     *     zone. The default value is false.
     * The format for a date and time always requires a time zone, even if it will be ignored. For backward
     *     compatibility with iOS 6, provide an appropriate time zone, so that the information is displayed
     *     meaningfully even without ignoring time zones.
     * This key does not affect how relevance is calculated.
     * Available in iOS 7.0.
     */
    protected ?bool $ignoresTimeZone = null;
    /**
     * @var bool|null Optional. If true, the label’s value is displayed as a relative date; otherwise, it is displayed
     *     as an absolute date. The default value is false.
     * This key does not affect how relevance is calculated.
     */
    protected ?bool $isRelative = null;
    /** @var string|null Style of time to display. Must be one of the styles listed in Table 4-1. */
    protected ?string $timeStyle = null;
}
