<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\FieldDictionaryLevel;


/**
 * Class NumberStyle
 * @package Patrikap\Passtore\Base\FieldDictionaryLevel
 *
 * Number Style Keys
 * Information about how a number should be displayed in a field.
 * These keys are optional if the field’s value is a number; otherwise, they are not allowed. Only one of these keys is
 *     allowed per field.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 02.06.2020 23:03
 * @author Konstantin.K
 */
class NumberStyle
{
    /**
     * https://developer.apple.com/documentation/foundation/nsnumberformatterstyle
     */
    public const NUMBER_STYLE_DECIMAL    = 'PKNumberStyleDecimal';
    public const NUMBER_STYLE_PERCENT    = 'PKNumberStylePercent';
    public const NUMBER_STYLE_SCIENTIFIC = 'PKNumberStyleScientific';
    public const NUMBER_STYLE_SPELL_OUT  = 'PKNumberStyleSpellOut';
    /** @var string|null ISO 4217 currency code for the field’s value. */
    protected ?string $currencyCode = null;
    /**
     * @var string|null Style of number to display. Must be one of the following values:
     * PKNumberStyleDecimal
     * PKNumberStylePercent
     * PKNumberStyleScientific
     * PKNumberStyleSpellOut
     * Number styles have the same meaning as the Cocoa number formatter styles with corresponding names. For more
     *     information, see NSNumberFormatterStyle.
     */
    protected ?string $numberStyle = null;
}
